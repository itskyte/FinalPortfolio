import java.awt.Color;
import java.awt.Dimension;
import java.awt.Graphics;
import java.awt.event.MouseEvent;
import java.awt.event.MouseListener;
import java.util.Random;

import javax.swing.JPanel;

public class RandomColorPanel extends JPanel {
	
	private static final int PANEL_SIDE = 500;
	
	private static final int X_CENTER = PANEL_SIDE/2;
	private static final int Y_CENTER = X_CENTER;
	private static final int SQUARE_SIDE = 50;
	private static final int NUMBER_OF_COLORS = 8;
	
	private static final Color FIRST_COLOR = Color.RED;
	private static final Color SECOND_COLOR = Color.BLUE;
	private static final Color THIRD_COLOR = Color.GREEN;
	private static final Color FORTH_COLOR = Color.CYAN;
	private static final Color FIFTH_COLOR = Color.ORANGE;
	private static final Color SIXTH_COLOR = Color.PINK;
	private static final Color SEVENTH_COLOR = Color.YELLOW;
	private static final Color DEFAULT_COLOR = Color.BLACK;
	
	private final Square aSquare;
	
	private static final Random generator = new Random();
	
	public RandomColorPanel() {
		setPreferredSize(new Dimension(PANEL_SIDE, PANEL_SIDE));
		aSquare = new Square(SQUARE_SIDE);
	}
	
	public void paintComponent(Graphics pen) {
		
		addMouseListener(new ClickListener());
		
		int colorChoice = generator.nextInt(NUMBER_OF_COLORS);
		Color squareColor;
		switch(colorChoice) {
		case 0: 
			squareColor = FIRST_COLOR;
			break;
		case 1: 
			squareColor = SECOND_COLOR;
			break;
		case 2: 
			squareColor = THIRD_COLOR;
			break;
		case 3: 
			squareColor = FORTH_COLOR;
			break;
		case 4: 
			squareColor = FIFTH_COLOR;
			break;
		case 5: 
			squareColor = SIXTH_COLOR;
			break;
		case 6: 
			squareColor = SEVENTH_COLOR;
			break;
		default:
			squareColor = DEFAULT_COLOR;
			break;
		}
	
	int halfSide = SQUARE_SIDE/2;
	int xCorner = X_CENTER - halfSide;
	int yCorner = Y_CENTER - halfSide;
	aSquare.display(xCorner, yCorner, squareColor, pen);
	
	}
	
	public class ClickListener implements MouseListener{
		
		public void mouseClicked(MouseEvent click) {
			repaint();
		}
		
		public void mouseEntered(MouseEvent e) {}
		public void mouseExited(MouseEvent e) {}
		public void mousePressed(MouseEvent e) {}
		public void mouseReleased(MouseEvent e) {}
	}
	
}
