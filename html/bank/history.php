<?php


// Get the JSON payload from the request body
$json = file_get_contents("php://input");

// Decode the JSON into an associative array
$data = json_decode($json, true);

// Check if decoding was successful and 'username' field exists
if ($data === null || !isset($data['account'])) {
    echo json_encode(["error" => "Invalid JSON or missing account field"]);
    exit;
}

// Extract the username field
$account = $data['account'];

// Switch based on the username field
switch ($account) {
    case "1234 5678 9012":
$history = <<< XXXXXX

        {
    "transactions": [
      {
        "date": "2024-10-01",
        "description": "Deposit",
        "amount": "+$200",
        "type": "Cash",
        "balance": "$670",
        "from": "...",
        "to": "1234 5678 9012"
      },
      {
        "date": "2024-09-25",
        "description": "Grocery Store",
        "amount": "-$50",
        "type": "Debit Card",
        "balance": "$470",
        "from": "1234 5678 9012",
        "to": "..."
      },
      {
        "date": "2024-09-15",
        "description": "Gas Station",
        "amount": "-$100",
        "type": "Debit Card",
        "balance": "$520",
        "from": "1234 5678 9012",
        "to": "..."
          },
      {
        "date": "2024-09-10",
        "description": "Paycheck, Tom Brian, Company Corp.",
        "amount": "+$500",
        "type": "Bank Transfer",
        "balance": "$620",
        "from": "9876 5432 1098",
        "to": "1234 5678 9012"
          }
    ]
  }


XXXXXX;

        break;

    case "9876 5432 1098":
        $history = <<< XXXXXX

        {
    "transactions": [

      {
        "date": "2024-09-10",
        "description": "Paycheck, Anna Birds, Company Corp.",
        "amount": "-$1000",
        "type": "Bank Transfer",
        "balance": "$12000",
        "from": "9876 5432 1098",
        "to": "3210 5678 9012"
          },
      {
        "date": "2024-09-10",
        "description": "Paycheck, Andrew Richards, Company Corp.",
        "amount": "-$1000",
        "type": "Bank Transfer",
        "balance": "$13000",
        "from": "9876 5432 1098",
        "to": "4321 5678 9012"
          },
      {
        "date": "2024-09-10",
        "description": "Paycheck, Susan Sharp, Company Corp.",
        "amount": "-$1000",
        "type": "Bank Transfer",
        "balance": "$14000",
        "from": "9876 5432 1098",
        "to": "6543 5678 9012"
          },
      {
        "date": "2024-09-10",
        "description": "Paycheck, Tom Brian, Company Corp.",
        "amount": "-$500",
        "type": "Bank Transfer",
        "balance": "$15000",
        "from": "9876 5432 1098",
        "to": "1234 5678 9012"
          }
          
    ]
  }


XXXXXX;
        break;

    case "6543 5678 9012":
    case "3210 5678 9012":
    case "4321 5678 9012":
        $history = <<< XXXXXX

        {
    "transactions": [

      {
        "date": "2024-09-10",
        "description": "Paycheck, Company Corp.",
        "amount": "+$1000",
        "type": "Bank Transfer",
        "balance": "$1000",
        "from": "9876 5432 1098",
        "to": "$account"
          }
             
    ]
}


XXXXXX;
        break;

    default:
    $history = <<< XXXXXX

    {
"transactions": [

  {
    "date": "error",
    "description": "",
    "amount": "",
    "type": "",
    "balance": "",
    "from": "",
    "to": ""
      }
         
]
}
XXXXXX;
        break;
}






echo($history);

?>