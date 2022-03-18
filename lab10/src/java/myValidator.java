
import javax.faces.component.UIComponent;
import javax.faces.context.FacesContext;
import javax.faces.validator.Validator;
import javax.faces.validator.ValidatorException;

import javax.faces.application.FacesMessage;
import java.net.URI;
import java.net.URISyntaxException;
import javax.faces.validator.FacesValidator;
/*
 * Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
 * Click nbfs://nbhost/SystemFileSystem/Templates/Classes/Class.java to edit this template
 */

/**
 *
 * @author Asus
 */@FacesValidator("com.tutorialspoint.test.UrlValidator")
public class myValidator implements Validator{
 FacesMessage myMsg = new FacesMessage("Wrong format", "There has to be @ in the middle");
FacesMessage myMsg2=new FacesMessage("Wrong Format","There has to be dot somewhere, you need a domain name right?");

    public void validate(FacesContext facesContext,
                         UIComponent component, Object value)
            throws ValidatorException {
        StringBuilder mail = new StringBuilder();
        String mailVal = value.toString();

        try {
            if (!mailVal.contains("@")) {
                throw new ValidatorException(myMsg);
            }
            if (!mailVal.contains(".")) {
                throw new ValidatorException(myMsg2);
            }
            new URI(mail.toString());
        }
            catch(URISyntaxException e){
                FacesMessage msg =
                        new FacesMessage("URL validation failed", "Invalid URL format");
                msg.setSeverity(FacesMessage.SEVERITY_ERROR);
                throw new ValidatorException(msg);
            }


        }
            


        
    
}
