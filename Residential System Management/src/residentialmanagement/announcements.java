/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
package residentialmanagement;

import java.sql.Connection;
import java.sql.DriverManager;
import java.sql.ResultSet;
import java.sql.Statement;
import javafx.application.Application;
import static javafx.application.Application.launch;
import javafx.event.EventHandler;
import javafx.geometry.Pos;
import javafx.scene.Cursor;
import javafx.scene.Scene;
import javafx.scene.control.Alert;
import javafx.scene.control.Button;
import javafx.scene.control.Label;
import javafx.scene.control.PasswordField;
import javafx.scene.control.TextArea;
import javafx.scene.control.TextField;
import javafx.scene.input.MouseEvent;
import javafx.scene.layout.GridPane;
import javafx.stage.Stage;
import static residentialmanagement.admin.adminStage;

/**
 *
 * @author omben
 */
public class announcements extends Application {
    
    static Stage  announcementsStage = new Stage();
   
    @Override
    public void start(Stage announcementsStage) {
           Label title_lbl = new Label("ADD ANNOUNCEMENT");
           TextArea announcement_txt = new TextArea();
           Button submit_btn = new Button("Submit");
           submit_btn.setStyle("-fx-background-color: SILVER; -fx-border-color: brown;  -fx-text-fill: black; -fx-border-radius: 5;");
           submit_btn.setCursor(Cursor.HAND);
           
            Button back_btn = new Button("BACK");
            back_btn.setStyle("-fx-background-color: SILVER; -fx-border-color: brown;  -fx-text-fill: black; -fx-border-radius: 5;");
            back_btn.setCursor(Cursor.HAND);
           
           GridPane gridPane = new GridPane();
           gridPane.setMinSize(600,400);
           gridPane.setVgap(10);
           gridPane.setHgap(10);
           gridPane.setAlignment(Pos.CENTER);
           
           gridPane.add(title_lbl, 1,1);
           gridPane.add(announcement_txt, 1,2);
           gridPane.add(submit_btn, 1,3);
           gridPane.add(back_btn, 2,3);
           
        announcementsStage.setTitle("ADD ANNOUNCEMENTS");
       
        Scene my_scene=new Scene(gridPane); //This is our scene
        
        gridPane.setStyle("-fx-background-image:url('https://i.pinimg.com/474x/73/21/49/7321495cd2660054405b9989dc2cc779.jpg'); -fx-background-repeat: no-repeat; -fx-background-size: 700 500; -fx-background-position: center center;");
     
        announcementsStage.setScene(my_scene);  
       
        announcementsStage.show();
        
        back_btn.setOnMouseClicked((new EventHandler<MouseEvent>(){
                public void handle(MouseEvent event){
                    admin a = new admin();
                    a.start(adminStage);
                    
                    announcementsStage.close();
                }
               }));
           
           submit_btn.setOnMouseClicked((new EventHandler<MouseEvent>() {
         @Override
         public void handle(MouseEvent event) {
           
             String announcement = announcement_txt.getText();
             
             
             try
             {
                Class.forName("com.mysql.cj.jdbc.Driver");
               
                Connection con = DriverManager.getConnection("jdbc:mysql://127.0.0.1/residential_management_system","root","kipese@!!!");
               
                Statement st= con.createStatement();                
               
                String query = "INSERT INTO `announcement` (`Announcement_description`) VALUES ('"+announcement+"'); ";
                st.executeUpdate(query);
               

                    Alert al = new Alert(Alert.AlertType.CONFIRMATION);
                    al.setContentText("Announcement Added Successful");
                    al.show();
                   
                    announcement_txt.setText("");
                   

                con.close();
             
             }
            catch(Exception ee){System.out.println(ee);System.out.println("Connection error");}
            {
               
            }
         }
        }));

                   
           
    }

    /**
     * @param args the command line arguments
     */
    public static void main(String[] args) {
        launch(args);
    }
   
}


