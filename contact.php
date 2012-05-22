<?php
include('header.php');
?>

<div id="content" class="fixed"> 
    <h2 class="title">Contact</h2>
    <div id="contact" class="fixed"> 
        
        <div class="col-6 float-left padded-right"> 
            <form id="contact-form" class="fixed" method="POST" action="message.php"> 
                <fieldset> 
                    <p><label>Votre nom</label> <input id="nom" class="textbox validate[required]"  type="text" name="name"  > </p> 
                    <p><label>Votre email</label> <input id="email" class="textbox validate[required,custom[email]]"  type="text" name="email" > </p> 
                    <p><label>Sujet du message</label> <input id="subject" class="textbox validate[required]"  type="text" name="subject" value="" > </p> 
                    <p><label>Votre message</label> <textarea id="message" class="textbox validate[required]" name="message" rows="3"  cols="25"></textarea> </p> 
                    <p> <button class="button" id="btn" type="submit" style="width:100px; cursor:pointer;">Envoyer</button> </p> 
                   
                </fieldset> 
            </form> 
        </div> 
        
        <div class="col-7 float-left">
            <div><a href="http://www.viadeo.com/fr/profile/stephane.lanjard"><img src="_layout/images/icone_viadeo.png" width="64" height="64"/></a></div>
           <div><a href="https://plus.google.com/102181016053474103289"><img src="_layout/images/googleplus-icon.png" width="64" height="64"/></a></div>
                   <div><a href="https://twitter.com/#!/stephane_lanj"><img src="_layout/images/twitter-immobilier.png" width="60" height="60"/></a></div>

           
        </div> </div>
       
    
</div> 
<div id="footer" class="fixed"> <div class="divider2"></div> <p id="copyright">© 2012 Stéphane Lanjard.</p> <a href="#" id="top">ˆ Haut</a> </div> 
<script type="text/javascript">
    $('#contactck a').addClass('active');
   $(document).ready(function(){
    $("#contact-form").validationEngine('attach', {promptPosition : "centerRight", scroll: false});
   });
    $('#btn').click(function(e){
        e.preventDefault();
        if($('#contact-form').validationEngine("validate")){$('form').submit()};
    })
</script>
</body>
</html>






