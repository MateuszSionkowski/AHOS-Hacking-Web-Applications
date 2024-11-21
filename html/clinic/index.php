<?php
require __DIR__ . '/../functions.php';



$error_message="";
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ( !empty($_GET['visit'])) {

        $visit = $_GET['visit'];
    } 
    $error_message = "Oops! Wrong password. Try again!";
}


$data = [
    ["Thomas Brian", "Pain in the back while lifting heavy objects", "Orthopedic Specialist", "10:30 AM on September 15, 2024"],
    ["Jessica Cornell", "Problems with falling asleep, migraines, being tired", "General Practitioner", "11:30 AM on September 15, 2024"],
    ["Michael Blake", "Persistent knee pain", "Orthopedic Specialist", "9:00 AM on September 16, 2024"],
    ["Sarah Wong", "Seasonal allergies", "Allergist", "10:15 AM on September 16, 2024"],
    ["David Smith", "Sore throat and cough", "General Practitioner", "11:45 AM on September 16, 2024"],
    ["Emily Davis", "Routine physical examination", "General Practitioner", "1:00 PM on September 16, 2024"],
    ["Linda Chen", "Back pain after long hours of sitting", "Chiropractor", "3:30 PM on September 16, 2024"],
    ["James Brown", "Chest pain and breathing difficulty", "Cardiologist", "8:00 AM on September 17, 2024"],
    ["Sophia Johnson", "High blood pressure", "General Practitioner", "9:15 AM on September 17, 2024"],
    ["Brian Turner", "Persistent cough", "Pulmonologist", "10:00 AM on September 17, 2024"],
    ["Olivia Mitchell", "Routine check-up", "Family Medicine", "11:00 AM on September 17, 2024"],
    ["Elijah Wilson", "Foot pain from recent injury", "Orthopedic Specialist", "1:30 PM on September 17, 2024"],
    ["Chloe Martinez", "Skin rash", "Dermatologist", "2:45 PM on September 17, 2024"],
    ["Noah Green", "Anxiety and stress management", "Psychologist", "3:00 PM on September 17, 2024"],
    ["Mia White", "Digestive issues", "Gastroenterologist", "8:00 AM on September 18, 2024"],
    ["Liam Robinson", "Chronic headaches", "Neurologist", "9:00 AM on September 18, 2024"],
    ["Isabella Harris", "Yearly wellness check", "General Practitioner", "10:30 AM on September 18, 2024"],
    ["Emma Wright", "Routine eye exam", "Ophthalmologist", "11:00 AM on September 18, 2024"],
    ["William Anderson", "Joint pain in hands", "Rheumatologist", "1:00 PM on September 18, 2024"],
    ["Evelyn Scott", "Persistent earache", "ENT Specialist", "2:15 PM on September 18, 2024"],
    ["Henry King", "Follow-up for high cholesterol", "Cardiologist", "3:45 PM on September 18, 2024"],
    ["Alexander Phillips", "Routine dental cleaning", "Dentist", "9:00 AM on September 19, 2024"],
    ["Zoe Edwards", "Sinus issues", "ENT Specialist", "10:00 AM on September 19, 2024"],
    ["Lucas Evans", "Skin mole evaluation", "Dermatologist", "11:15 AM on September 19, 2024"],
    ["Layla Morris", "General fatigue and tiredness", "Endocrinologist", "1:00 PM on September 19, 2024"],
    ["Benjamin Cooper", "Foot pain", "Podiatrist", "2:30 PM on September 19, 2024"],
    ["Madison Reed", "Pain in wrists from typing", "Orthopedic Specialist", "4:00 PM on September 19, 2024"],
    ["Grayson Price", "Routine health check", "General Practitioner", "8:30 AM on September 20, 2024"],
    ["Aria Bell", "Issues with digestion", "Gastroenterologist", "9:30 AM on September 20, 2024"],
    ["Aiden Foster", "Frequent nosebleeds", "ENT Specialist", "10:15 AM on September 20, 2024"],
    ["Abigail Barnes", "Counseling session", "Psychologist", "11:45 AM on September 20, 2024"],
    ["Daniel Hughes", "High blood pressure management", "Cardiologist", "1:00 PM on September 20, 2024"],
    ["Grace Griffin", "Breathing issues", "Pulmonologist", "2:00 PM on September 20, 2024"],
    ["Jack Murphy", "Chest discomfort", "Cardiologist", "9:00 AM on September 21, 2024"],
    ["Lily Peterson", "Skin irritation and itchiness", "Dermatologist", "10:00 AM on September 21, 2024"],
    ["Anthony Long", "Allergic reaction", "Allergist", "11:15 AM on September 21, 2024"],
    ["Victoria Sanchez", "Joint pain in knee", "Orthopedic Specialist", "1:00 PM on September 21, 2024"],
    ["Mason Ramirez", "Annual eye check-up", "Ophthalmologist", "2:30 PM on September 21, 2024"],
    ["Charlotte Hughes", "General wellness visit", "Family Medicine", "4:00 PM on September 21, 2024"],
    ["Jackson Perry", "Check-up for asthma management", "Pulmonologist", "9:00 AM on September 22, 2024"],
    ["Ella Powell", "Sleep disturbances", "Sleep Specialist", "10:30 AM on September 22, 2024"],
    ["Harper Brooks", "Weight management", "Nutritionist", "12:00 PM on September 22, 2024"],
    ["Nathan Watson", "Chronic back pain", "Orthopedic Specialist", "1:30 PM on September 22, 2024"],
    ["Amelia Kelly", "Hypertension check-up", "General Practitioner", "3:00 PM on September 22, 2024"],
    ["Sofia Sanders", "Follow-up on surgery", "General Surgeon", "9:00 AM on September 23, 2024"],
    ["Ryan Ramirez", "Routine blood test", "Phlebotomist", "10:00 AM on September 23, 2024"],
    ["Victoria Price", "Annual wellness exam", "Family Medicine", "11:30 AM on September 23, 2024"],
    ["Andrew Hall", "Chronic fatigue", "Endocrinologist", "1:00 PM on September 23, 2024"],
    ["Scarlett Morgan", "Annual mammogram", "Radiologist", "2:30 PM on September 23, 2024"],
    ["Samuel Carter", "Follow-up for diabetes", "Endocrinologist", "9:00 AM on September 24, 2024"],
    ["Ella Martinez", "Allergy testing", "Allergist", "10:15 AM on September 24, 2024"],
    ["Landon Turner", "Back pain", "Chiropractor", "11:30 AM on September 24, 2024"],
    ["Mila Henderson", "Flu symptoms", "General Practitioner", "1:00 PM on September 24, 2024"],
    ["Gabriel Russell", "Foot pain", "Podiatrist", "2:30 PM on September 24, 2024"],
    ["Leah Perez", "Blood pressure check-up", "General Practitioner", "4:00 PM on September 24, 2024"],
    ["Dylan Gray", "Persistent cough", "Pulmonologist", "8:30 AM on September 25, 2024"],
    ["Chloe Jenkins", "Routine check-up", "Family Medicine", "9:30 AM on September 25, 2024"],
    ["Wyatt Hunt", "Frequent migraines", "Neurologist", "10:15 AM on September 25, 2024"],
    ["Eva Bishop", "Yearly skin screening", "Dermatologist", "11:45 AM on September 25, 2024"],
    ["Isaac Powell", "Sinus infection", "ENT Specialist", "1:00 PM on September 25, 2024"],
    ["Avery Lopez", "Heart palpitations", "Cardiologist", "2:00 PM on September 25, 2024"],
    ["Zachary Collins", "Routine dental cleaning", "Dentist", "9:00 AM on September 26, 2024"],
    ["Ella Jenkins", "Sleep apnea assessment", "Sleep Specialist", "10:00 AM on September 26, 2024"],
    ["Oliver Ross", "Foot pain evaluation", "Orthopedic Specialist", "11:15 AM on September 26, 2024"],
    ["Brooklyn Kelly", "Counseling session", "Psychologist", "1:00 PM on September 26, 2024"],
    ["Elias Bailey", "High cholesterol management", "Cardiologist", "2:30 PM on September 26, 2024"],
    ["Lily Bennett", "Asthma check-up", "Pulmonologist", "8:00 AM on September 27, 2024"]
];

$d=$data[$visit];



$page = <<< XXXXXX



<h2 >Sequential IDOR Exploitation</h2>
<h3  >Find data of other appointments</h3>       
<hr class="divider">

 
    <style>
        .lab {
            font-family: Arial, sans-serif;
            background-color: #f4f6f8;
            margin: 0;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
        .container {
            background-color: #ffffff;
            max-width: 500px;
            width: 90%;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .lab h1 {
            color: #2c3e50;
            font-size: 1.8em;
            margin-bottom: 0.5em;
        }
        .lab p {
            color: #555;
            font-size: 1em;
            line-height: 1.6;
            margin: 10px 0;
        }
        .summary-box {
            background-color: #f9fafb;
            padding: 15px;
            margin-top: 1em;
            border-radius: 5px;
            text-align: left;
        }
        .summary-item {
            font-weight: bold;
            color: #2c3e50;
        }
        .footer {
            margin-top: 20px;
            font-size: 0.9em;
            color: #888;
        }
    </style>
<div class="lab">

<div class="container">
    <h1>Thank You for Registering Your Visit</h1>
    <p>Dear <strong>$d[0]</strong>,</p>
    <p>We have successfully registered your upcoming appointment. Below is a summary of your visit details:</p>

    <div class="summary-box">
        <p><span class="summary-item">Symptoms:</span> $d[1]</p>
        <p><span class="summary-item">Specialist:</span> $d[2]</p>
        <p><span class="summary-item">Appointment Time:</span> $d[3]</p>
    </div>

    <p>We look forward to helping you. If you have any questions, feel free to contact us at (555) 123-4567.</p>

    <div class="footer">
        <p>Thank you for choosing our clinic. We’re here to support your health.</p>
    </div>
</div>

</div>




XXXXXX;



    load_header("Clinic");
    echo($page);
    load_footer();



?>
