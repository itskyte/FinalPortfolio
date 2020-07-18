import java.awt.Color;
import java.awt.Graphics;

public class Square {
       private final int side;
       
       public Square(int squareSide) {
    	   side=squareSide;
       }
       
       public void display(int xCorner, int yCorner, Color squareColor, Graphics pen) {
    	   pen.setColor(squareColor);
    	   pen.fillRect(xCorner, yCorner, side, side);
       }
}
