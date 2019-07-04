<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible content=3IE-edge">
    <link rel="stylesheet" href="output2.css">
    <link rel="icon" href="Image/logoCV.ico" />
<!--     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-grun()yR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="sandstone-bootstrap.min.css">
    <title>Votre CV</title>
</head>

<body class="container">

<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ NAV $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<?php 
include('Nav.html');
 ?> 

 <!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ CV $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
    <div class="spacer page">

        <div class="row-fluid header"> <!--$$$$$$$$$$$$$$ Header $$$$$$$$$$$$$$  -->
            <div class="col-sm-6 info-person">
                <p class="first-name-data"> First name <span class="last-name-data">&nbsp; Last name</span></p>
                <p class="role-title-data"> JAVA Fullstack Developer Junior </p>
            </div>     
            <div class="col-sm-2">
                <img src="Image/portrait.png" style="height: 100px;" />
            </div>
        </div>

        <div class="row spacer"> <!--$$$$$$$$$$$$$$ Body $$$$$$$$$$$$$$  -->
            <div class="col-8" style="height: 100%"> <!--$$$$$$$$$$$$$$ Colonne skills, exp, formation $$$$$$$$$$$$$$  -->
                 
                    <div class="component"> <!-- __________________________________________________________ SKILLS/COMPETENCES -->
                        <div class="sect-header">
                            <p class="comp-header-data">Technical skills</p>                        
                        </div>
                        <div class="comp-items">
                            <div class="comp-item">
                                <p class="comp-item-field-data">Web development:<span class="comp-item-value-data"> html, css, javascript </span></p>
                            </div>
                        </div>
                        <div class="comp-items">
                            <div class="comp-item">
                                <p class="comp-item-field-data">Programming languages:<span class="comp-item-value-data"> Java, Python </span></p>
                            </div>
                        </div>
                        <div class="comp-items">
                            <div class="comp-item">
                                <p class="comp-item-field-data">Management:<span class="comp-item-value-data"> Git, Slack, Trello</span></p>
                            </div>
                        </div>
                    </div>

                <div class="experiences"> <!-- ____________________________________________________ EXPERIENCES -->
                    <div class = "sect-header">
                        <p class="exp-header-data"> Professional experiences </p>                        
                    </div>
                    <div class="exp">
                        <div class="exp-title">
                            <p class="exp-role-data"> Job role </p>
                            <p class="exp-company-data"> Company </p>
                        </div>
                        <div class="exp-time-place">
                            <p class="exp-from-data"> From Year</p>
                            <p class="exp-to-data"> to Year</p>
                            <p class="exp-place-data"> City, Country </p>
                        </div>
                        <div class="exp-description">
                            <p class="exp-description-data"> What you have achieved in the job.</p>
                        </div>
                    </div>

                    <div class="exp">
                        <div class="exp-title">
                            <p class="exp-role-data"> Job role </p>
                            <p class="exp-company-data"> Company </p>
                        </div>
                        <div class="exp-time-place">
                            <p class="exp-from-data"> From Year</p>
                            <p class="exp-to-data"> to Year</p>
                            <p class="exp-place-data"> City, Country </p>
                        </div>
                        <div class="exp-description">
                            <p class="exp-description-data"> What you have achieved in the job.</p>
                        </div>
                    </div>
                </div>

                <div class="experiences"> <!-- ____________________________________________________ FORMATION -->
                    <div class = "sect-header">
                        <p class="exp-header-data"> Education </p>                        
                    </div>
                    <div class="exp">
                        <div class="exp-title">
                            <p class="exp-role-data"> Degree title </p>
                            <p class="exp-company-data"> Institute </p>
                        </div>
                        <div class="exp-time-place">
                            <p class="exp-from-data"> From Year<span class="exp-to-data"> to Year</span></p>
                            <p class="exp-place-data"> City, Country </p>
                        </div>
                        <div class="exp-description">
                            <p class="exp-description-data"> Formation details </p>
                        </div>
                    </div>

                    <div class="exp">
                        <div class="exp-title">
                            <p class="exp-role-data"> Degree title </p>
                            <p class="exp-company-data"> Institute </p>
                        </div>
                        <div class="exp-time-place">
                            <p class="exp-from-data"> From Year<span class="exp-to-data"> to Year</span></p>
                            <p class="exp-place-data"> City, Country </p>
                        </div>
                        <div class="exp-description">
                            <p class="exp-description-data"> Formation details </p>
                        </div>
                    </div>
                </div> 
            </div> <!-- FIN colonne skills, exp, formation -->

            <div class="col-4" style="height: 100%"> <!--$$$$$$$$$$$$$$ Colonne About/Langues/Hobbies/Contact $$$$$$$$$$$$$$  -->

                <div class="row forwords"> <!-- ____________________________________________________ A PROPOS/ABOUT -->
                    <p class="forwords-data">I am a hard worker who likes team building ;D</p>
                </div>
              
                 <div class="component"><!-- ____________________________________________________ LANGUES  -->  
                    <div class="comp-header">
                        <p class="comp-header-data">Languages</p>                        
                    </div>
                    <div class="comp-items">
                        <div class="comp-item">
                            <p class="comp-item-field-data">English:</p>
                            <p class="comp-item-value-data">level</p>
                        </div>
                        <div class="comp-item">
                            <p class="comp-item-field-data">French:</p>
                            <p class="comp-item-value-data">level</p>
                        </div>
                    </div>                    
                </div>
        
                <div class="row-fluid component"> <!-- _____________________________________________________ HOBBIES -->       
                        <p class="comp-header-data">Hobbies</p>                        
                        <div class="comp-item">
                            <p class="comp-item-field-data">Physical activities</p>
                            <p class="comp-item-value-data">football, tennis, hiking</p>
                        </div>
                        <div class="comp-item">
                            <p class="comp-item-field-data">Mental activities</p>
                            <p class="comp-item-value-data">yoga, meditation, reading</p>
                        </div>                     
                </div>

                <div class="row-fluid info-localization"> <!-- _____________________________________________ CONTACT-->
                            <p class="address-data"><img src="Image/logomailbox.png" class="material-icons" style="height: 15px;"/> Number Road, 99999, Town, Country </p>                            
                            <p class="email-data"> <img src="Image/logomail.svg" class="material-icons" style="height: 15px;"/> youremail@domain.abc </p>
                            <p class="phone-data"> <img src="Image/logotel.svg" class="material-icons" style="height: 15px;" /> +999 99 99 99 99</p>
                </div>
        </div> <!-- FIN colonne About/Langues/Hobbies/Contact -->

    </div> <!-- FIN du body -->

<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ CV FOOT $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
    <div class="row-fluid spacer" id="cvfoot">
        <p>This CV was edited with &copy CV Creator, awesome !</p>
    </div>

</div> <!-- fin de la page CV -->

<!-- $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ FOOTER $$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$$ -->
<?php 
include('Footer.html');
 ?> 


    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<!--     Bootstrap -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="output.js"></script>
<!-- Ajax -->
<!--     <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script> -->
<!-- Javascript Ccile-->
    <script type="text/javascript" src="CV.js"></script>

</body>
</html>
