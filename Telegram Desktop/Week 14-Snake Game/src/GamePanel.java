import java.awt.Color;
import java.awt.Dimension;
import java.awt.Graphics;
import java.awt.Image;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import java.awt.event.KeyAdapter;
import java.awt.event.KeyEvent;
import java.util.Random;
import java.util.Scanner;

import javax.swing.Timer;

import javax.swing.ImageIcon;
import javax.swing.JButton;
import javax.swing.JLabel;
import javax.swing.JPanel;
import javax.swing.JTextField;

public class GamePanel extends JPanel implements ActionListener{
	
	private int SIZE = 320;
	private int DOT_SIZE = 16;
	private int ALL_DOTS = 400;
	
	private Image dot;
	private Image apple;
	private Image gameOverimg;
	
	private int appleX;
	private int appleY;
	
	private int[] x = new int[ALL_DOTS];
	private int[] y = new int[ALL_DOTS];
	
	private int dots;
	private Timer timer;
	
	private boolean left = false;
	private boolean right = true;
	private boolean up = false;
	private boolean down = false;
	private boolean inGame = true;
	
	private int count = 0;
	private int level = 1;
	private String player;
	private int delay = 180;
	
	private final JButton restartBtn;
	private final JButton startBtn;
	private final JLabel label;
	private JLabel instruction;
	JTextField textField = new JTextField(16);
	
	
	
	public GamePanel() { 
		setBackground(Color.PINK);
		addKeyListener(new FieldKeyListener());
		setFocusable(true);
		
		label = new JLabel("Username: ");
		add(label);
		add(textField);
		player = textField.getText();
		

		
		startBtn = new JButton("Start Game");
		startBtn.setActionCommand("Start");
		startBtn.addActionListener(this);
		startBtn.setPreferredSize(new Dimension(120, 50));
		startBtn.setLocation(20, SIZE/2);
		add(startBtn);
		startBtn.setVisible(true);	

		
		restartBtn = new JButton("Start Over");
		restartBtn.setActionCommand("Restart");
		restartBtn.addActionListener(this);
		restartBtn.setPreferredSize(new Dimension(100, 50));
		restartBtn.setLocation(20, SIZE/2);
		add(restartBtn);
		restartBtn.setVisible(false);
		
	}
	public void instruct() {
		instruction = new JLabel("Instruction");
		add(instruction);
		String instruction1="1. You have to eat the fruit to gain score.";
		String instruction2="2. The more you eat, the more advance the level is.";
		System.out.println(instruction1+"\r\n"+instruction2);
		
	}
	public void initGame() {
		loadImage();
		
		dots = 3;
		count = 0;
		level = 1;
		for(int i=0; i<dots; i++) {
			x[i] = 48 - i*DOT_SIZE;
			y[i] = 48;
		}
		timer = new Timer(delay, this);
		timer.start();
		createApple();
	}
	
	
	private void createApple() {
		appleX = new Random().nextInt(19)*DOT_SIZE;
		appleY = new Random().nextInt(19)*DOT_SIZE;
	}
	
	public void loadImage() {
		ImageIcon iia = new ImageIcon("tomato.png");
		apple = iia.getImage();
		
		ImageIcon iid = new ImageIcon("sphere.png");
		dot = iid.getImage();
		
		ImageIcon iig = new ImageIcon("game-over.png");
		gameOverimg = iig.getImage();
		
	}
	
	protected void paintComponent(Graphics g) {
		super.paintComponent(g);
		
		if(inGame) {

				g.drawImage(apple, appleX, appleY, this);
				for(int i=0; i<dots; i++) {
				g.drawImage(dot, x[i], y[i], this);
				g.drawString(player, 10, SIZE/20);
				String score = "Score" +Integer.toString(count);
				g.drawString(score, 120, SIZE/20);
				String lv = "Level: " +Integer.toString(level) +"/10";
				g.drawString(lv, 240, SIZE/20);}
				JLabel score = new JLabel("Score:");
				score.setBounds(120, SIZE/2, 400, 30);

		}
		else {
			g.setColor(Color.BLACK);
			g.drawString(player, 120, SIZE/4);
			String score = "Your score " +Integer.toString(count);
			g.drawString(score, 120, SIZE/3);
			g.drawImage(gameOverimg,90,SIZE/3,this );
		}
	}
	
	protected void paintComponent1(Graphics h) {
		super.paintComponent(h);
		h.drawRect(0, 0, 400, 30);
		h.setColor(Color.WHITE);
		h.fillRect(0, 0, 400, 30);
	
	}
	public void move() {
		for(int i=dots; i>0; i--) {
			x[i] = x[i-1];
			y[i] = y[i-1];
		}
		if(left) {
			x[0] -= DOT_SIZE;
		}
		if(right) {
			x[0] += DOT_SIZE;
		}
		if(up) {
			y[0] -= DOT_SIZE;
		}
		if(down) {
			y[0] += DOT_SIZE;
		}
	}
	
	@Override
	public void actionPerformed(ActionEvent e) {
		
		if(e.getActionCommand() == "Start" || e.getActionCommand() == "Restart") {
			player = "Player: " +textField.getText();
			left = false;
			right = true;
			up = false;
			down = false;
			inGame = true;
			initGame();
			label.setVisible(false);
			textField.setVisible(false);
			startBtn.setVisible(false);
			restartBtn.setVisible(false);
		}
		if(inGame == true) {
			checkApple();
			checkCollisions();
			checkLevel();
			
			move();
        }
		if(inGame == false) {
			restartBtn.setVisible(true);
		}

        repaint();
	}
	
	private void checkLevel() {
		switch(count){
			case 3:

				level = 2;
				break;
				
			case 6:

				level = 3;
				break;
				
			case 9:

				level = 4;
				break;
				
			case 12:

				level = 5;
				break;
				
			case 15:

				level = 6;
				break;
				
			case 18:

				level = 7;
				break;
				
			case 21:

				level = 8;
				break;
				
			case 24:
				level = 9;
				break;
				
			case 27:

				level = 10;
				break;
		}
	}
	
	private void checkCollisions() {

        for(int i = dots; i > 0; i --) {
      	  if(i>4 && x[0] == x[i] && y[0] == y[i]) {
      		  inGame=false;
      	  }
        }
        
        if(x[0]>=SIZE) {
      	  inGame = false;
        }
        if(x[0]<0) {
      	  inGame = false;
        }
        if(y[0]>=SIZE) {
      	  inGame = false;
        }
        if(y[0]<0) {
      	  inGame = false;
        }
        if (!inGame) {
            timer.stop();
        }
	}
	
	private void checkApple() {
		if(x[0] == appleX && y[0] == appleY) {
			dots++;
			createApple();
			count++;
		}
	}
	

	class FieldKeyListener extends KeyAdapter{
		
		public void keyPressed(KeyEvent e) {
			super.keyPressed(e);
			int key = e.getKeyCode(); 
			
			if(key == KeyEvent.VK_LEFT && !right) {
				left = true;
				up = false;
				down= false;
			}
			if(key == KeyEvent.VK_RIGHT && !left) {
				right = true;
				up = false;
				down= false;
			}
			if(key == KeyEvent.VK_UP && !down) {
				up = true;
				left = false;
				right= false;
			}
			if(key == KeyEvent.VK_DOWN && !up) {
				down = true;
				left = false;
				right= false;
			}
		}
	}


}

