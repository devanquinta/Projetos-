package sistemas;
import java.awt.Frame;
import java.security.PublicKey;

import javax.swing.JFrame;
import javax.swing.JPanel;
import sys_tela.Login;

import org.omg.CORBA.PUBLIC_MEMBER;


public class Sistemas {
	public static JPanel tela;
	public static JFrame frame;

	public static void main(String[] args) {
		// TODO Auto-generated method stub
			
		CriarComponentes();	

	}
	private static void CriarComponentes() {
		frame = new JFrame("Sistema");
		frame.setSize(700, 500);
		frame.setDefaultCloseOperation(JFrame.EXIT_ON_CLOSE);
		frame.setLocationRelativeTo(null);
		//Navegador.login();
		
		tela = new Login();
		tela.setVisible(true);
		
		frame.add(tela);
		
		frame.setVisible(true);
		
		
		
		
		
	}

}

