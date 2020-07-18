import javax.swing.JFrame;

public class DisplayRandomColor {

	public static void main(String[] args) {
		
		JFrame window = new JFrame();
		window.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		window.setTitle("A Random Color");
		
		RandomColorPanel panel = new RandomColorPanel();
		window.add(panel);
		window.pack();
		window.setVisible(true);

	}

}
