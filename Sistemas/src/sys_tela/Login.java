package sys_tela;
import java.awt.*;
import java.awt.Font;
import java.awt.event.ActionEvent;
import java.awt.event.ActionListener;
import javax.swing.*;
import javax.swing.JButton;
import javax.swing.JLabel;
import javax.swing.JOptionPane;
import javax.swing.JPanel;
import javax.swing.JPasswordField;
import javax.swing.JTextField;

import org.omg.CORBA.PUBLIC_MEMBER;

 class Login extends javax.swing.JPanel{
	 
	    JLabel userJLabel;
		JTextField campoUserField;
		JLabel senhaJLabel;
		JPasswordField campoSenhaField;
		JButton btnButtonEntrar;
		

	public Login() {
		// TODO Auto-generated constructor stub
			CriarComponentes();
			CriarEventos();	
		}
	private void CriarComponentes() {
		setLayout(null);
		
		JLabel tituloJLabel  = new JLabel("Seja bem vindo ao Sistema da Company SA ", JLabel.CENTER);
		tituloJLabel.setFont(new Font(tituloJLabel.getFont().getName(), Font.PLAIN, 18));
		
		userJLabel = new JLabel("Usuário", JLabel.LEFT);
		campoUserField = new JTextField();
		senhaJLabel = new JLabel("Senha", JLabel.LEFT);
		campoSenhaField = new JPasswordField();
		btnButtonEntrar = new JButton("Entrar");
		
		
		tituloJLabel.setBounds(20, 100, 660, 40);
		userJLabel.setBounds(250,220,200,20);
		campoUserField.setBounds(250,240,200,40);
		senhaJLabel.setBounds(250,280,200,20);
		campoSenhaField.setBounds(250,300,200,40);
		btnButtonEntrar.setBounds(250,350,20,40);
		
		add(tituloJLabel);
		add(userJLabel);
		add(campoUserField);
		add(senhaJLabel);
		add(campoSenhaField);
		add(btnButtonEntrar);
		
		
		setVisible(true);
			
	}
	
	private void CriarEventos() {
		btnButtonEntrar.addActionListener(new ActionListener() {
			
			@Override
			public void actionPerformed(ActionEvent e){
				// TODO Auto-generated method stub
				
			}
			
		};
	}
 

 }
