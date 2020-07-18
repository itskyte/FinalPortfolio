import javax.swing.JFrame;

public class GameWindow {

	public static void main(String[] args) {
		JFrame mw = new JFrame();
		mw.setTitle("Snake Game");
		mw.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		mw.setSize(320, 345);
		mw.setLocation(400, 400);
		mw.setResizable(false);
		
		GamePanel gPanel = new GamePanel();
		mw.add(gPanel);
		mw.setVisible(true);

	}

}
