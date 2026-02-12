import smtplib
from email.message import EmailMessage

path = "/Volumes/rton-work/Sites/rton/app/bedrock/web/app/themes/rton-theme/.mrkrabs_access"
user = "MrKrabs.rton@gmail.com"
dest = "ramon@rton.nl"

try:
    with open(path, "r", encoding="utf-8") as f:
        pw = f.read().replace('\xa0', '').strip()
    
    msg = EmailMessage()
    msg.set_content("Ahoy Ramon!\n\nDe kluis is open en de verbinding werkt.\n\nGroet, Mr. Krabs")
    msg['Subject'] = 'Testmail Mr. Krabs'
    msg['From'] = user
    msg['To'] = dest

    with smtplib.SMTP_SSL('smtp.gmail.com', 465) as smtp:
        smtp.login(user, pw)
        smtp.send_message(msg)
    print("✨ Gelukt! De postduif is onderweg.")
except Exception as e:
    print(f"❌ Fout: {e}")
