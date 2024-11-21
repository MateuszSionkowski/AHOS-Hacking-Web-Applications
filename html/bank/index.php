<?php
require __DIR__ . '/../functions.php';







$page = <<< XXXXXX

<h2 >Hidden Parameter IDOR</h2>
<h3  >Find out transaction history of a different account</h3> 
<hr class="divider">      



  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Bank Account</title>
  <style>
    .lab
     {
      font-family: Arial, sans-serif;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
      margin: 0;
      background-color: #f2f2f2;
      color:black;
    }
    .account-container {
      margin: 30px auto;
      background-color: #ffffff;
      padding: 20px;
      border-radius: 10px;
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
      text-align: center;
      width: 1200px;
    }
    .lab h1 {
      font-size: 24px;
      color: #333;
    }
    .balance {
      font-size: 20px;
      margin: 20px 0;
      color: #008080;
    }
    button {
      padding: 10px 20px;
      background-color: #008080;
      color: white;
      border: none;
      border-radius: 5px;
      cursor: pointer;
    }
    button:hover {
      background-color: #005a5a;
    }
    table {
      margin-top: 20px;
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 8px;
      text-align: center;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #f8f8f8;
    }
  </style>

<div class="lab">

<div class="account-container">
  <h1>Bank Account</h1>
  <div class="balance">Current Balance: $670</div>
  <button onclick="fetchAccountHistory()">Account History</button>
  <div id="history-table"></div>
</div>

<script>
  // Function to fetch account history from a mock API
  const data = {
    account: '1234 5678 9012'
  };
 
  function fetchAccountHistory() {
    fetch('http://127.0.0.1/bank/history.php', {method: 'POST',  headers: {        "Content-Type": "application/json" },  body: JSON.stringify(data)}) 
      .then(response => response.json())
      .then(data => displayHistory(data))
      .catch(error => console.error('Error fetching account history:', error));
  }

  // Function to display the account history in a table
  function displayHistory(data) {
    const table = document.createElement('table');
    table.innerHTML = `
      <tr>
        <th>Date</th>
        <th>Description</th>
        <th>Amount</th>
        <th>Balance</th>
        <th>Type</th>
        <th>From</th>
        <th>To</th>
      </tr>
    `;
    data.transactions.forEach(transaction => {
      const row = document.createElement('tr');
      row.innerHTML = `
        <td>\${transaction.date}</td>
        <td>\${transaction.description}</td>
        <td>\${transaction.amount}</td>
        <td>\${transaction.balance}</td>
        <td>\${transaction.type}</td>
        <td>\${transaction.from}</td>
        <td>\${transaction.to}</td>
      `;
      table.appendChild(row);
    });
    document.getElementById('history-table').innerHTML = '';
    document.getElementById('history-table').appendChild(table);
  }
</script>

</div>


XXXXXX;





    load_header("Bank details");
    echo($page);
    load_footer();





?>
