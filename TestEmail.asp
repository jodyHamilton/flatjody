<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 TRANSITIONAL//EN">
<html>

	<head>
		<title></title>
<!--METADATA TYPE="typelib" 
UUID="CD000000-8B95-11D1-82DB-00C04FB1625D" 
NAME="CDO for Windows 2000 Library" -->
<!--METADATA TYPE="typelib" 
UUID="00000205-0000-0010-8000-00AA006D2EA4" 
NAME="ADODB Type Library" -->
<%
Dim objMail
Set objMail = Server.CreateObject("CDO.Message") 
Set objConfig = Server.CreateObject("CDO.Configuration") 


'Configuration: 
objConfig.Fields(cdoSendUsingMethod) = cdoSendUsingPort

objConfig.Fields(cdoSMTPServer)="smtp.1and1.com" 
objConfig.Fields(cdoSMTPServerPort)=25 
objConfig.Fields(cdoSMTPAuthenticate)=cdoBasic 
objConfig.Fields(cdoSendUserName) = "m36926722-1"
objConfig.Fields(cdoSendPassword) = "53045jh"

'Update configuration 
objConfig.Fields.Update 
Set objMail.Configuration = objConfig 

objMail.From ="me@flatjody.com" 
objMail.To = "jhamiltoorion@gmail.com" 
objMail.Subject = "whatever" 
objMail.TextBody= Request.Form("form1") 
objMail.Send 

If Err.Number = 0 Then
  Response.Write("Mail sent!")
Else
  Response.Write("Error sending mail. Code: " & Err.Number)
  Err.Clear
End If
Set objMail=Nothing 
Set objConfig=Nothing 
%>
	</head>
	<body>



	</body>
</html>