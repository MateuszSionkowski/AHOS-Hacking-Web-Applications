<?php



// Database initialization
$db = new SQLite3('lab.db');

// Create users table if not exists
$db->exec("CREATE TABLE IF NOT EXISTS employees (
    id INTEGER PRIMARY KEY AUTOINCREMENT,
    employeeID TEXT NOT NULL,
    firstname TEXT NOT NULL,
    lastname TEXT NOT NULL,
    position TEXT NOT NULL,
    department TEXT NOT NULL,
    password TEXT NOT NULL,
    email TEXT NOT NULL
)");

// Populate table with dummy data if empty
$count = $db->querySingle("SELECT COUNT(*) FROM employees");
if ($count == 0) {
    $db->exec("
        INSERT INTO employees (employeeID, firstname, lastname, position, department, password, email) VALUES
        ('ThomasCombs', 'Thomas', 'Combs', 'Senior Manager', 'Sales', 'IloVeYou89', 'thomascombs@example.com'),
        ('JaneDoe', 'Jane', 'Doe', 'Software Engineer', 'IT', 'SecurePass123', 'janedoe@example.com'),
        ('JohnSmith', 'John', 'Smith', 'HR Specialist', 'Human Resources', 'HRrocks2023', 'johnsmith@example.com'),
        ('LisaBrown', 'Lisa', 'Brown', 'Product Manager', 'Marketing', 'PMpower!2023', 'lisabrown@example.com'),
        ('RobertWhite', 'Robert', 'White', 'Team Lead', 'Engineering', 'LeadTheWay#1', 'robertwhite@example.com'),
        ('EmilyDavis', 'Emily', 'Davis', 'Sales Associate', 'Sales', 'SellMore99', 'emilydavis@example.com'),
        ('MichaelClark', 'Michael', 'Clark', 'DevOps Engineer', 'IT', 'Ops4Life', 'michaelclark@example.com'),
        ('SarahJones', 'Sarah', 'Jones', 'Designer', 'Creative', 'ArtLover22', 'sarahjones@example.com'),
        ('DavidMiller', 'David', 'Miller', 'Consultant', 'Strategy', 'ThinkBig23', 'davidmiller@example.com'),
        ('SophiaTaylor', 'Sophia', 'Taylor', 'Financial Analyst', 'Finance', 'Finance@2023', 'sophiataylor@example.com'),
        ('JamesAnderson', 'James', 'Anderson', 'Legal Advisor', 'Legal', 'Justice4All', 'jamesanderson@example.com'),
        ('OliviaWilson', 'Olivia', 'Wilson', 'Data Scientist', 'Analytics', 'Data4Life', 'oliviawilson@example.com'),
        ('LucasMartinez', 'Lucas', 'Martinez', 'Network Engineer', 'IT', 'NetWork123', 'lucasmartinez@example.com'),
        ('CharlotteGarcia', 'Charlotte', 'Garcia', 'Researcher', 'R&D', 'Innovate2023', 'charlottegarcia@example.com'),
        ('BenjaminWalker', 'Benjamin', 'Walker', 'Accountant', 'Finance', 'NumbersGame!', 'benjaminwalker@example.com'),
        ('GraceHarris', 'Grace', 'Harris', 'Recruiter', 'Human Resources', 'TalentHunter', 'graceharris@example.com')
    ");
}


?>