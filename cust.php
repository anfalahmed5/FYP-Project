<?php
$file_name = isset($_GET['file_name']) ? $_GET['file_name'] : null;

session_start();

if (isset($_POST['logout'])) {
    // Destroy the session
    // session_destroy();
    unset($_SESSION['uid']);
	$_SESSION["loggedin"] = false;
    // Redirect to the same page
    header("Location: " . $_SERVER['PHP_SELF']);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>Agreement.pk</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
   

        <!-- Favicon -->
        <link href="img/logo1.png" sizes="76x76" rel="icon">

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=EB+Garamond:ital,wght@1,600;1,700;1,800&family=Roboto:wght@400;500&display=swap" rel="stylesheet"> 
        
        <!-- CSS Libraries -->
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
        <link href="bootstrap/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">
        <link href="css/cust.css" rel="stylesheet">
        
    </head>
    <body>
        <div class="wrapper">
            <!-- Top Bar Start -->
            <div class="top-bar">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="logo">
                                <a href="index.php">
                                    <img src="img/logo1.png" alt="Logo">
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-9">
                            <div class="top-bar-right">
                                <div class="text">
                                    <h2>10:00 AM- 06:00 PM</h2>
                                    <p>Opening Hour Mon - Fri</p>
                                </div>
                                <div class="text">
                                    <h2>+92 309 3932341</h2>
                                    <p>Call Us For Free Consultation</p>
                                </div>
                                <div class="social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Top Bar End -->

            <!-- Nav Bar Start -->
			<div class="nav-bar">
                    <div class="container-fluid">
                        <nav class="navbar navbar-expand-lg bg-dark navbar-dark">
                            <a href="#" class="navbar-brand" style="height: auto; width:50%;"><img src="img/logo1.png" alt="Logo" style="height: auto; width: 100%;"></a>
                            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="navbar-nav mr-auto"> 
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="about.php" class="nav-item nav-link">About</a>      
                            <a href="portfolio.php" class="nav-item nav-link">Services</a>
                            <a href="contact.php" class="nav-item nav-link">Contact</a>      
                            </div>
                        </div>
                            <div class="navbar_right">
							<?php if (!isset($_SESSION['uid'])) {?>

                                <button class="btn nav-item nav-link" id="navbarCollapse">
                                <a href="sign.php">Sign In</a>
                                </button>
                            <?php } 
                            else{ ?>
                            <div class="profile collapse navbar-collapse justify-content-between" id="navbarCollapse">
                            <div class="icon_wrap">
                                <span class="name" style="color: #aa9166;font-size: 30px;"><?php echo $_SESSION['username'] ?></span>
                                    <i class="fas fa-chevron-down"></i>
                            </div>
                                <div class="profile_dd" id="logoutform">
                                <ul class="profile_ul">
                                    <li>
                                    <form method="post">
                                    <button type="submit" name="logout" value="Logout">
                                    <a class="logout"  id = "logout"  ><span class="picon"><i class="fas fa-sign-out-alt"></i></span>Logout</a>
                                    </button>
                                    </form>
                                    </li>
                                </ul>
                                </div>
                            </div>
                            <?php }?>
                        </div>
                        </nav>
                    </div>
                </div>
            <!-- Nav Bar End -->

			<!-- Contact Start -->
			<div class="container">
			<div class="row">
				<div class="col-sm-12 ">      
					<div class="wrapper" style="display: block; width: 100%%; margin: 96px auto; position: relative;">
					<form name="wc-richTextEditor" id="wc-richTextEditor-form" class="wc-richTextEditor" action="#" method="post">
					
					<!-- Editor Control Box -->
					<div class="editor-controls" id="editor-controls">
					
					<!-- Font Family -->
					<div class="rte editor button-group" id="fontFamilyGroup">
						<div class="rte editor dropdown-label"><i class="fa fa-fw fa-font"></i></div>
						<select class="rte dropdown editor" id="fontFamily" title="Font Family"><i class="fa fa-fw fa-font"></i>
							<option value="Arial, Helvetica, sans-serif" style="font-family: Arial, Helvetica, sans-serif">Arial</option>
							<option value="'Arial Black', Gadget, sans-serif" style="font-family: 'Arial Black', Gadget, sans-serif">Arial Black</option>
							<option value="'Times New Roman', serif" style="font-family: 'Times New Roman">Times New Roman</option>
							<option value="mv waheed" style="font-family: 'mv waheed">MV waheed</option>
							<option value="'Palatino Linotype', 'Book Antiqua', Palatino, serif" style="font-family: 'Palatino Linotype', 'Book Antiqua', Palatino, serif">Book Antiqua</option>
							<option value="Impact, Charcoal, sans-serif", style="font-family: Impact, Charcoal, sans-serif">Impact</option>
							<option value="'Lucida Sans Unicode', 'Lucida Grande', sans-serif" style="font-family: 'Lucida Sans Unicode', 'Lucida Grande', sans-serif">Lucida Console</option>
							<option value="Tahoma, Geneva, sans-serif" style="font-family: Tahoma, Geneva, sans-serif">Tahoma</option>
							<option value="'Trebuchet MS', Helvetica, sans-serif" style="font-family: 'Trebuchet MS', Helvetica, sans-serif">Trebuchet MS</option>
							<option value="Verdana, Geneva, sans-serif" style="font-family: Verdana, Geneva, sans-serif">Verdana</option>
						</select>
					</div>

					<!-- Header Style -->
					<div class="rte editor button-group" id="parStyleGroup">
						<div class="rte editor dropdown-label"><i class="fa fa-fw fa-header"></i></div>
						<select class="rte dropdown editor" id="parStyle" title="Paragraph Style"><i class="fa fa-fw fa-font"></i>
							<option value="h1" style="font-size: 2em; font-style: bold;" id="heading1">Heading 1</option>
							<option value="h2" style="font-size: 1.75em; font-style: bold;" id="heading2">Heading 2</option>
							<option value="h3" style="font-size: 1.5em; font-style: bold;">Heading 3</option>
							<option value="h4" style="font-size: 1.25em; font-weight: 900;">Heading 4</option>
							<option value="h5" style="font-size: 1.15em; font-weight: bold;">Heading 5</option>
							<option value="h5" style="font-size: 1.15em; font-weight: bold;">Heading 6</option>
							<option selected value="p" style="font-size: 1.0em; font-weight: bold;">Paragraph</option>
						</select>
					</div>

					<!-- Font Size -->
					<div class="rte editor button-group" id="textSizeGroup">
						<div class="rte editor dropdown-label"><i class="fa fa-fw fa-text-height"></i></div>
						<select class="rte dropdown editor" id="fontSize" title="Font Size" onclick=""><i class="fa fa-fw fa-font"></i>
							<option value="1" size="1">1</option>
							<option value="2" size="2">2</option>
							<option value="3" size="3">3</option>
							<option value="4" size="4">4</option>
							<option value="5" size="5">5</option>
							<option value="6" size="6">6</option>
							<option value="7" size="7">7</option>
						</select>
					</div>

					<!-- Font Color -->
					<div class="rte editor button-group" id="textColorGroup">
						<div class="rte editor dropdown-label"><i class="fa fa-fw fa-pencil"></i></div>
						<select class="rte dropdown editor" id="textColor" title="Text Color" onclick=""><i class="fa fa-fw fa-font"></i>
							<option value="#eb5e6c" style="background-color: #eb5e6c; color: black;">Pig</option>
							<option value="#eb2538" data-textcolor="white" style="background-color: #eb2538; color: white;">Scarlet</option>
							<option value="#be1e2d" data-textcolor="white" style="background-color: #be1e2d; color: white;">Crimson</option>
							<option value="#eb25a2" data-textcolor="black" style="background-color: #eb25a2; color: black;">Hot Pink</option>
							<option value="#be1e9e" data-textcolor="black" style="background-color: #be1e9e; color: black;">Violet</option>
							<option value="#781363" data-textcolor="white" style="background-color: #781363; color: white;">Plumb</option>
							<option value="#5a25eb" data-textcolor="white" style="background-color: #5a25eb; color: white;">Indigo</option>
							<option value="#491ebe" data-textcolor="white" style="background-color: #491ebe; color: white;">Royal Blue</option>
							<option value="#2e1378" data-textcolor="white" style="background-color: #2e1378; color: white;">Navy</option>
							<option value="#25aceb" data-textcolor="black" style="background-color: #25aceb; color: black;">Sky</option>
							<option value="#1e79be" data-textcolor="white" style="background-color: #1e79be; color: white;">Aqua</option>
							<option value="#135178" data-textcolor="white" style="background-color: #135178; color: white;">Deep Sea</option>
							<option value="#25eb64" data-textcolor="black" style="background-color: #25eb64; color: black;">Lime</option>
							<option value="#1ebe6e" data-textcolor="black" style="background-color: #1ebe6e; color: black;">Emerald</option>
							<option value="#137858" data-textcolor="white" style="background-color: #137858; color: white;">Forest</option>
							<option value="#e8eb35" data-textcolor="black" style="background-color: #e8eb35; color: black;">Lemon</option>
							<option value="#d1be17" data-textcolor="white" style="background-color: #d1be17; color: white;">Mustard</option>
							<option value="#787813" data-textcolor="white" style="background-color: #787813; color: white;">Olive</option>
							<option value="#eb6725" data-textcolor="black" style="background-color: #eb6725; color: black;">Carrot</option>
							<option value="#be511e" data-textcolor="white" style="background-color: #be511e; color: white;">Pumpkin</option>
							<option value="#57391e" data-textcolor="white" style="background-color: #57391e; color: white;">Chocolate</option>
							<option value="#ffffff" data-textcolor="black" style="background-color: #ffffff; color: black;">White</option>
							<option value="#ebebeb" data-textcolor="black" style="background-color: #ebebeb; color: black;">Plaster</option>
							<option value="#bebebe" data-textcolor="black" style="background-color: #bebebe; color: black;">Concrete</option>
							<option value="#787878" data-textcolor="white" style="background-color: #787878; color: white;">Asphalt</option>
							<option value="#000000" data-textcolor="white" style="background-color: #000000; color: white;">Black</option>
							<option value="CUSTOM" style="background-color: white">CUSTOM</option>
						</select>
					</div>
					
					<!-- Inline Styles -->
					<div class="rte editor button-group" id="inlineStyleGroup">
						<!-- Bold -->
						<a class="rte button editor" id="bold" title="Bold" onclick="boldSel()"><i class="fa fa-fw fa-bold"></i></a>
						<!-- Italicize -->
						<a class="rte button editor" id="italic" title="Italicize" onclick="italicSel()"><i class="fa fa-fw fa-italic"></i></a>
						<!-- Underline -->
						<a class="rte button editor" id="underline" title="Underline" onclick="underlineSel()"><i class="fa fa-fw fa-underline"></i></a>
						<!-- Strikethrough -->
						<a class="rte button editor" id="strikethrough" title="Strikethrough" onclick="strikethroughSel()"><i class="fa fa-fw fa-strikethrough"></i></a>
					</div>
					<!-- Alignment -->
					<div class="button-group" id="alignmentGroup">
						<!-- Align Left -->
						<a class="rte button editor" id="left" title="Left-align" onclick="alignLeftSel()"><i class="fa fa-fw fa-align-left"></i></a>
						<!-- Align Center -->
						<a class="rte button editor" id="center" title="Center-align" onclick="alignCenterSel()"><i class="fa fa-fw fa-align-center"></i></a>
						<!-- Align Right -->
						<a class="rte button editor" id="right" title="Right-align" onclick="alignRightSel()"><i class="fa fa-fw fa-align-right"></i></a>
						<!-- Justify -->
						<a class="rte button editor" id="justify" title="Justify" onclick="alignJustifySel()"><i class="fa fa-fw fa-align-justify"></i></a>
					</div>
					<!-- Lists -->
					<div class="button-group" id="listsGroup">
						<!-- Unordered List -->
						<a class="rte button editor" id="unordered" title="Bulleted List" onclick="newUlSel()"><i class="fa fa-fw fa-list-ul"></i></a>
						<!-- Ordered List -->
						<a class="rte button editor" id="ordered" title="Numbered List" onclick="newOlSel()"><i class="fa fa-fw fa-list-ol"></i></a>			
					</div>	
					<!-- Hyperlinks -->
					<div class="button-group" id="linkGroup">
						<!-- Hyperlink -->
						<a class="rte button editor" id="link" title="Add Hyperlink" onclick="linkSel()"><i class="fa fa-fw fa-link"></i></a>
						<!-- Remove Hyperlink -->
						<a class="rte button editor" id="unlink" title="Remove Hyperlink" onclick="unlinkSel()"><i class="fa fa-fw fa-unlink"></i></a>		
					</div>

				</div>
				<!-- Editor text box -->
				<textarea class="editor-text-box" id="editor-text-box" name="textareaBox" style="display:none" wrap="hard" value=""></textarea>
				<iframe class="editor-richText-box" id="editor-richText-box" name="richTextBox"></iframe>

				<!-- Submit Content -->
				<a class="rte button main text center" id="submit"  title="Submit" onclick="downloadPDF()">Save <i class="fa fa-fw fa-check button"></i></a>
				
				</form>
				</div>
			</div>
			</div>
			</div>
			<!-- Contact End -->

			<!-- Footer Start -->
			<div class="footer">
					<div class="container">
						<div class="row">
						<div class="col-md-6 col-lg-4">
							<div class="footer-about">
								<h2>About Us</h2>
								<p>
								"Agreement.pk" may be a platform that makes it easier to create, administer, or store agreements if it is connected to legal agreements or papers. In that scenario, the platform may provide resources for law, manage contracts, and create legally enforceable papers.
								</p>
							</div>
						</div>
						<div class="col-md-6 col-lg-8">
						<div class="row">
							<div class="col-md-6 col-lg-3">
								<div class="footer-link">
									<h2>Services Areas</h2>
									<a href="portfolio.php">Civil Law</a>
									<a href="portfolio.php">Family Law</a>
									<a href="portfolio.php">Business Law</a>
									<a href="portfolio.php">Education Law</a>
									<a href="portfolio.php">Immigration Law</a>
								</div>
							</div>
							<div class="col-md-6 col-lg-3">
								<div class="footer-link">
									<h2>Useful Pages</h2>
									<a href="about.php">About Us</a>
									<a href="portfolio.php">Practices</a>
									<a href="portfolio.php">Attorneys</a>
									<a href="portfolio.php">Case Studies</a>
									<a href="contact.php">FAQs</a>
								</div>
							</div>
							<div class="col-md-6 col-lg-6">
								<div class="footer-contact">
									<h2>Get In Touch</h2>
									<p><i class="fa fa-map-marker-alt"></i>Qasimabad, Hyderabad, Pakistan</p>
									<p><i class="fa fa-phone-alt"></i>+92 309 3932341</p>
									<p><i class="fa fa-envelope"></i>Agreement.pk.info@gmail.com</p>
									<div class="footer-social">
										<a href=""><i class="fab fa-twitter"></i></a>
										<a href=""><i class="fab fa-facebook-f"></i></a>
										<a href=""><i class="fab fa-youtube"></i></a>
										<a href=""><i class="fab fa-instagram"></i></a>
										<a href=""><i class="fab fa-linkedin-in"></i></a>
									</div>
								</div>
							</div>
						</div>
						</div>
						</div>
					</div>
			</div>
			<!-- Footer End -->
            
            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
			
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>
    </body>
</html>


<script >
            $(".profile .icon_wrap").click(function () {
            $(this).parent().toggleClass("active");
            });
            // $(document).on("click","#logoutform", "#logout", function(){
            //     session_abort();
            //     window.location = "index.php";
            // });
            function logoutFunction() {
                <?php $_SESSION['uid']==''?>
                location.reload();
    }

        </script>
<script>
   

$(document).ready(function(){
	// Call iFrameReady function
	iFrameReady();
	
	// Handle Editor Permissions
	setPermissions(1,1,1,1,1,1,1,1,1,1,1);
	
	// Handle text file import event
	$("#fileImport").change(function() {
		var fr = new FileReader();
		console.log("This = " + this);
		fr.onload = function() {
			loadContent(this.result);
			console.log("This.result = " + this.result);
		};
		fr.readAsText(this.files[0]);
		console.log("This.Files[0] = " + this.files[0]);
	});
	
	
	// Load content
	//loadContent("This is <i>Awesome</i>!");
	
	// Preformat text font
	$('.editor-richText-box').ready(function() {
		richTextBox.document.execCommand('fontName',false,'sans-serif'); 
	})
	
	// Dropdown Functionality
	// font family
	$('#fontFamily').change(function() {
		var fontFamily = this.value;
		// Match dropdown box style to selected color
		$(this).css('font-family',fontFamily);
		
		// Set selected color
		richTextBox.document.execCommand('fontName',false,fontFamily);
	});
	
	$('#parStyle').change(function() {
		richTextBox.document.execCommand('formatBlock',false,this.value); 
	});
	
	$('#fontSize').change(function() {
		richTextBox.document.execCommand('fontSize',false,this.value); 
	});
	
	$('#textColor').change(function() {
		var colorValue = this.value;
		var textColor = $(this).css('color');
		console.log("TextColor: ",textColor);
		if (colorValue == "CUSTOM") {
			// Prompt for Custom Color
			colorValue = prompt("Enter the HEX value or RGBA value: ","");
		}
		// Match dropdown box style to selected color
		$(this).css('background-color',colorValue);
		
		// Set selected color
		richTextBox.document.execCommand('foreColor',false,colorValue); 
	});
	
	$('#textHilight').change(function() {
		var color = this.value;
		if (color == "CUSTOM") {
			// Prompt for Custom Color
			color = prompt("Enter the HEX value or RGBA value: ","");
		}
		richTextBox.document.execCommand('foreColor',false,color); 
	});
	
});

/* FUNCTION DEFINITIONS */

/* FUNCTION: iFrameReady()
Allows user editing of iFrame contents. */
function iFrameReady() {
	richTextBox.document.designMode = 'On';
}

/* FUNCTION: submitContent()
Inserts rich text iFrame content into textarea field and submits the content to the parser */
function submitContent() {
	var theForm = document.getElementById("wc-richTextEditor-form");
	theForm.elements["textareaBox"].value = window.frames['richTextBox'].document.body.innerHTML;
	theForm.submit();
}

/* FUNCTION: importContent()
Gets html content from database and injects it into the editor iframe */
function loadContent(content) {
	var theForm = document.getElementById("wc-richTextEditor-form");
	window.frames['richTextBox'].document.body.innerHTML = content;
}

/* FUNCTION: setPermissions()
Gets object editing permissions and sets Constants for editor's use. */
function setPermissions(HTML,CHANGE_PAR_STYLE,ALLOW_H1,CHANGE_INLINE_STYLE,CHANGE_SIZE,CHANGE_FONT_FAMILY,CHANGE_PAR_ALIGNMENT,CHANGE_TEXT_COLOR,ADD_LINK,ADD_LIST,ADD_IMAGE) {
		// Restrict all HTML features
		if (HTML == 0) {
			CHANGE_PAR_STYLE = 0;
			ALLOW_H1 = 0;
			CHANGE_INLINE_STYLE = 0;
			CHANGE_SIZE = 0;
			CHANGE_FONT_FAMILY = 0;
			CHANGE_PAR_ALIGNMENT = 0;
			CHANGE_TEXT_COLOR = 0;
			ADD_LINK = 0;
			ADD_LIST = 0;
			ADD_IMAGE = 0;
		}
		
		//Handle Permissions
		if (CHANGE_PAR_STYLE == 0) {
			$('.editor-controls > #parStyleGroup').hide();
		}
		if (ALLOW_H1 == 0) {
			$('option#heading1').hide();
			$('option#heading1').selected = false;
		}
		if (CHANGE_INLINE_STYLE == 0) {
			$('.editor-controls > #inlineStyleGroup').hide();
		}
		if (CHANGE_SIZE == 0) {
			$('.editor-controls > #textSizeGroup').hide();
		}
		if (CHANGE_FONT_FAMILY == 0) {
			$('.editor-controls > #fontFamilyGroup').hide();
		}
		if (CHANGE_PAR_ALIGNMENT == 0) {
			$('.editor-controls > #alignmentGroup').hide();
		}
		if (CHANGE_TEXT_COLOR == 0) {
			$('.editor-controls > #textColorGroup').hide();
		}
		if (ADD_LIST == 0) {
			$('.editor-controls > #listsGroup').hide();
		}
		if (ADD_LINK == 0) {
			$('.editor-controls > #linkGroup').hide();
		}
}

/* FUNCTION: importFromFile()
Gets object editing permissions and sets Constants for editor's use. */


/* FUNCTION: header1Sel()
Sets Header 1 peragraph style for the text */
function header1Sel() {
	richTextBox.document.execCommand('formatBlock',false,'h1'); 
}

/* FUNCTION: header2Sel()
Sets Header 2 peragraph style for the text */
function header2Sel() {
	richTextBox.document.execCommand('formatBlock',false,'h2'); 
}

/* FUNCTION: header3Sel()
Sets Header 3 peragraph style for the text */
function header3Sel() {
	richTextBox.document.execCommand('formatBlock',false,'h3'); 
}

/* FUNCTION: paragraphSel()
Sets Paragraphy peragraph style for the text */
function paragraphSel() {
	richTextBox.document.execCommand('formatBlock',false,'p'); 
}

/* FUNCTION: fontSel()
Change font family of selected text. */
function fontSel() {
	
}

/* FUNCTION: sizeSel()
Change font size of selected text. */
function sizeSel() {
	var size = prompt('Font size:', '');
	richTextBox.document.execCommand('FontSize',false,size);
}

/* FUNCTION: boldSel()
Bolds selected text. */
function boldSel() {
	richTextBox.document.execCommand('bold',false,null); 
}

/* FUNCTION: underlineSel()
Underlines selected text. */
function underlineSel() {
	richTextBox.document.execCommand('underline',false,null); 
}

/* FUNCTION: italicSel()
Italicizes selected text. */
function italicSel() {
	richTextBox.document.execCommand('italic',false,null); 
}

/* FUNCTION: strikethroughSel()
Stikes through selected text. */
function strikethroughSel() {
	richTextBox.document.execCommand('strikeThrough',false,null); 
}

/* FUNCTION: textColorSel()
Changes text color of selected text. */
function textColorSel() {
	
}

/* FUNCTION: highlightColorSel()
Changes highlight color of selected text. */
function highlightColorSel() {
	
}

/* FUNCTION: alignLeftSel()
Left-aligns selected text. */
function alignLeftSel() {
	richTextBox.document.execCommand('justifyLeft',false,null); 
}

/* FUNCTION: alignCenterSel()
Center-aligns selected text. */
function alignCenterSel() {
	richTextBox.document.execCommand('justifyCenter',false,null); 
}

/* FUNCTION: alignRightSel()
Right-aligns selected text. */
function alignRightSel() {
	richTextBox.document.execCommand('justifyRight',false,null); 
}

/* FUNCTION: alignJustifySel()
Justifies selected text. */
function alignJustifySel() {
	richTextBox.document.execCommand('justifyFull',false,null); 
}

/* FUNCTION: newOlSel()
Creates new Ordered List. */
function newOlSel() {
	richTextBox.document.execCommand("InsertOrderedList", false,"newOL");
}

/* FUNCTION: newUlSel()
Creates new Unordered List. */
function newUlSel() {
	richTextBox.document.execCommand("InsertUnorderedList", false,"newUL");
}

/* FUNCTION: linkSel()
Creates new hyperlink. */
function linkSel() {
	var linkURL = prompt("Enter URL:", "http://"); 
	richTextBox.document.execCommand("CreateLink", false, linkURL);
}

/* FUNCTION: unlinkSel()
Removes hyperlink. */
function unlinkSel() {
	richTextBox.document.execCommand("Unlink", false, null);
}
</script>
<script>
	function downloadPDF() {
            // Get text content from the text editor
			console.log("working");
const iframe = document.getElementById('editor-richText-box'); // Assuming this is your iframe element
const bodyElement = iframe.contentDocument || iframe.contentWindow.document; // Access the document of the iframe
const doc = bodyElement.documentElement.cloneNode(true); // Clone the document node

// Create a form and add text content
var form = document.createElement('form');
form.action = 'generate_pdf.php'; // This is where the form will be submitted
form.method = 'post';

var input = document.createElement('input');
input.type = 'hidden';
input.name = 'htmlContent'; // Change to 'htmlContent' to reflect that you're passing HTML content
input.value = doc.innerHTML; // Pass the HTML content of the iframe

form.appendChild(input);
document.body.appendChild(form);

// Submit the form to trigger the download
form.submit();

// Remove the form from the DOM
document.body.removeChild(form);
	}
</script>


<script>
document.addEventListener('DOMContentLoaded', function() {
    // Function to parse URL parameters
    function getUrlParameter(name) {
        name = name.replace(/[\[\]]/g, "\\$&");
        var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
            results = regex.exec(window.location.href);
        if (!results) return null;
        if (!results[2]) return '';
        return decodeURIComponent(results[2].replace(/\+/g, " "));
    }

    // Get the file name from the URL parameter
    const fileName = getUrlParameter('file_contents');

	// console.log(fileName);
    if (fileName) {
        // Assuming you have the file contents available, you can set it in the editor
        fetch(fileName)
            .then(response => response.text())
            .then(text => {
                // Set the text content in the textarea
                document.getElementById('editor-text-box').value = text;
                console.log(text);
                // Set the text content in the iframe's body
                const iframeBody = document.getElementById('editor-richText-box').contentWindow.document.body;
                iframeBody.innerHTML = text;
            })
            .catch(error => console.error('Error fetching file:', error));
    } else {
        console.error('File name parameter missing in the URL.');
    }
});
</script>