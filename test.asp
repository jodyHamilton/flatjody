<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 TRANSITIONAL//EN">
<html>

	<head>
		<title></title>
                <% @LANGUAGE="VBSCRIPT" CODEPAGE="1252"%>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
</head> 
<body> 

<% 
Set Mail = Server.CreateObject("SMTPsvg.Mailer") 'create an Asp mail component.
Mail.FromName   = "1&1 Test"
Mail.FromAddress= Request.Form("email")
Mail.RemoteHost = "mrelay.perfora.net" ' The mail server you have to use with Asp Mail
Mail.AddRecipient "ABCDE Company", "jhamiltoorion@gmail.com"
Mail.Subject    = "Website - Info Request"
Mail.BodyText   = Request.Form("info")
if Mail.SendMail then
 Response.Write "Your mail has already been sent..."
else
 Response.Write "Mail send failure. Error was " & Mail.Response
end if 
%> 

<body> 
<p>Thank You!!<br>
</body>
</html>
    