import os
import smtplib
import time
from email.message import EmailMessage

# --- CONFIGURATIE ---
PROJECT_PATH = "/Volumes/rton-work/Sites/rton/app/bedrock/web/app/themes/rton-theme"
ACCESS_FILE = os.path.join(PROJECT_PATH, ".mrkrabs_access")
GMAIL_USER = "MrKrabs.rton@gmail.com"
RECIPIENT = "ramon@rton.nl"

def send_mail(subject, body):
    try:
        with open(ACCESS_FILE, "r", encoding="utf-8") as f:
            pw = f.read().replace('\xa0', '').strip()
        
        msg = EmailMessage()
        msg.set_content(body)
        msg['Subject'] = subject
        msg['From'] = GMAIL_USER
        msg['To'] = RECIPIENT

        with smtplib.SMTP_SSL('smtp.gmail.com', 465) as smtp:
            smtp.login(GMAIL_USER, pw)
            smtp.send_message(msg)
        return True
    except Exception as e:
        print(f"Fout bij mailen: {e}")
        return False

def health_check():
    print("🧐 Mr. Krabs inspecteert de boel...")
    
    # 1. Check of de T7 er nog is
    if not os.path.exists(PROJECT_PATH):
        print("❌ T7 is niet gekoppeld!")
        return
    
    # 2. Check cruciale Bedrock/Sage bestanden
    essentials = ['style.css', 'theme.json', 'functions.php', 'package.json']
    missing = [f for f in essentials if not os.path.exists(os.path.join(PROJECT_PATH, f))]
    
    if missing:
        subject = "🚨 RTON Project Alert: Ontbrekende bestanden!"
        body = f"Ahoy Ramon,\n\nIk mis wat spullen in de kluis: {', '.join(missing)}.\nCheck je T7 verbinding!\n\nGroet, Mr. Krabs"
        send_mail(subject, body)
    else:
        print("✅ Alles ziet er goud uit op de T7.")

if __name__ == "__main__":
    # Eerste check bij opstarten
    health_check()
    send_mail("⚓️ Mr. Krabs Watchdog Actief", "De Senior Designer is ingeklokt op de Mac mini. Ik waak over de rton site op de T7.")
