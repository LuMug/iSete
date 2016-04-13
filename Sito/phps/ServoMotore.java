
import com.pi4j.io.gpio.GpioController;
import com.pi4j.io.gpio.GpioFactory;
import com.pi4j.io.gpio.GpioPinDigitalOutput;
import com.pi4j.io.gpio.PinState;
import com.pi4j.io.gpio.RaspiPin;
import java.io.IOException;
import java.util.logging.Level;
import java.util.logging.Logger;

public class ServoMotore {

    final GpioController gpio = GpioFactory.getInstance();
	private int cnt=0;
    GpioPinDigitalOutput myServo = gpio.provisionDigitalOutputPin(RaspiPin.GPIO_01, // PIN NUMBER
            "My LED", // PIN FRIENDLY NAME (optional)
            PinState.LOW);

    public ServoMotore(int n) {
		cnt=0;
        this.rotation(n);
    }
    public void rotation(int n) {
		//Servo sources:
        //http://en.wikipedia.org/wiki/Servo_control
        //http://upload.wikimedia.org/wikipedia/commons/b/b7/Sinais_controle_servomotor.JPG
        //http://learn.adafruit.com/adafruits-raspberry-pi-lesson-8-using-a-servo-motor/servo-motors
        //1000 == -90
        //1500 == 0
        //2000 == 90

		//riposizionamento iniziale
		try {
			
			for (int i = 0; i < 90; i++) {
				myServo.high();
				java.lang.Thread.sleep(2);
				myServo.low();
				java.lang.Thread.sleep(18);
			}
		} catch (InterruptedException ex) {
		}
System.out.println("start");
       for(int cnt=0;cnt<n;cnt++) {
            try {
				
                for (int i = 0; i < 100; i++) {
                    myServo.high();
                    java.lang.Thread.sleep(0);
                    myServo.low();
                    java.lang.Thread.sleep(20);
                }
                //aspetta un momento prima di cambiare posizione
		System.out.println("ok");
                for (int i = 0; i < 10; i++) {
                    java.lang.Thread.sleep(20);
                }
				
                for (int i = 0; i < 100; i++) {
                    myServo.high();
                    java.lang.Thread.sleep(2);
                    myServo.low();
                    java.lang.Thread.sleep(18);
                }
            } catch (InterruptedException ex) {
            }
        }
    }

    public static void main(String[] args) {
        ServoMotore s = new ServoMotore(Integer.parseInt(args[0]));
    }

}
