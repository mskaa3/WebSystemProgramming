/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */
import javax.faces.bean.ManagedBean;

/**
 *
 * @author Asus
 */
@ManagedBean
public class user {

    private String name;
    private String surname;
    private String email;
    private String telephone;
    private String color;
private String work;

    public user() {
    }



public void setName(String name){
    this.name=name;
}
public void setSurname(String surname){
    this.surname=surname;
}
public void setEmail(String email){
    this.email=email;
}
public void setTelephone(String telephone){
    this.telephone=telephone;
}
public void setColor(String color){
    this.color=color;
}
public String getName(){
    return name;
}
public void setWork(String work){
    this.work=work;
}
public String getWork(){
    return work;
}
public String getSurname(){
    return surname;
}
public String getEmail(){
    return email;
}
public String getTelephone(){
    return telephone;
}
public String getColor(){
    return color;
}

public String pressed()
{return ("pressed succesfully");}


}
