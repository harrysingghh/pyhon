import smtplib
from os.path import basename
from email.mime.application import MIMEApplication
from email.mime.multipart import MIMEMultipart
from email.mime.text import MIMEText
from email.utils import COMMASPACE, formatdate

mail_content = ''' Hello,
this a test mail.
'''
#The mail addresses and password
sender_address = 'info@antariksh.co.in'
sender_pass = 'P,+$oZ)k[^x%'
receiver_address = ['h.mohanpy@gmail.com', 'parveen17481@gmail.com']
#Setup the MIME
try:
    message = MIMEMultipart()
    message['From'] = sender_address
    message['To'] = ", ".join(receiver_address)
    message['Subject'] = 'ok this is done'   #The subject line
    #The body and the attachments for the mail
    message.attach(MIMEText(mail_content, 'plain'))
    #Create SMTP session for sending the mail
    with open('invoice.pdf', "rb") as fil:
        part = MIMEApplication(fil.read(),Name=basename('invoice.pdf'))
        part['Content-Disposition'] = 'attachment; filename="%s"' % basename('invoice.pdf')
        message.attach(part)
    session = smtplib.SMTP('email.antariksh.co.in', 25) #use gmail with port
    session.starttls() #enable security
    session.login(sender_address, sender_pass) #login with mail_id and password
    text = message.as_string()
    session.sendmail(sender_address, receiver_address, text)
    session.quit()
except Exception as e:
    print("EXCEPTION IS :::::::::::::::::::",e)
print('Mail Sent')
