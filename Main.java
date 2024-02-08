import java.awt.Robot;
import java.awt.event.KeyEvent;

public class Main{
	public static void main(String a[]) throws Exception{
		Robot r = new Robot();
		int k = 0;
		if(a[0].equals("left")) k = KeyEvent.VK_LEFT;
		else	k = KeyEvent.VK_RIGHT;
		r.keyPress(k);
        	Thread.sleep(100);
        	r.keyRelease(k);
	}
}