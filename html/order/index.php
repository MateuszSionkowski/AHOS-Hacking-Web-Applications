<?php
require __DIR__ . '/../functions.php';



$error_message="";
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    if ( !empty($_GET['order'])) {

        $order = $_GET['order'];
    } 
    $error_message = "Oops! Wrong password. Try again!";
}





$data = [
    [
        "<ul>
            <li>Navy Blue Blazer, $450</li>
            <li>Woolen Tie, $69</li>
            <li>White Dress Shirt, $120</li>
        </ul>",
        "<p><strong>Name:</strong> John Doe</p>
        <p><strong>Street Address:</strong> 123 Maple Avenue</p>
        <p><strong>City:</strong> Springfield</p>
        <p><strong>State:</strong> IL</p>
        <p><strong>Zip Code:</strong> 62704</p>
        <p><strong>Country:</strong> USA</p>",
        "9:00 AM on September 16, 2024"
    ],
    [
        "<ul>
            <li>Red Silk Scarf, $80</li>
            <li>Black Leather Belt, $55</li>
            <li>Grey Cashmere Sweater, $150</li>
        </ul>",
        "<p><strong>Name:</strong> Emily Smith</p>
        <p><strong>Street Address:</strong> 456 Oak Street</p>
        <p><strong>City:</strong> Rivertown</p>
        <p><strong>State:</strong> NY</p>
        <p><strong>Zip Code:</strong> 10001</p>
        <p><strong>Country:</strong> USA</p>",
        "2:30 PM on September 17, 2024"
    ],
    [
        "<ul>
            <li>Blue Denim Jeans, $90</li>
            <li>White Sneakers, $120</li>
            <li>Black T-Shirt, $35</li>
        </ul>",
        "<p><strong>Name:</strong> Michael Johnson</p>
        <p><strong>Street Address:</strong> 789 Pine Road</p>
        <p><strong>City:</strong> Lakeside</p>
        <p><strong>State:</strong> CA</p>
        <p><strong>Zip Code:</strong> 90001</p>
        <p><strong>Country:</strong> USA</p>",
        "11:15 AM on September 18, 2024"
    ],
    [
        "<ul>
            <li>Black Leather Jacket, $200</li>
            <li>Grey Hoodie, $60</li>
            <li>Jeans Shorts, $45</li>
        </ul>",
        "<p><strong>Name:</strong> Sarah Williams</p>
        <p><strong>Street Address:</strong> 321 Birch Lane</p>
        <p><strong>City:</strong> Mountainview</p>
        <p><strong>State:</strong> CO</p>
        <p><strong>Zip Code:</strong> 80014</p>
        <p><strong>Country:</strong> USA</p>",
        "4:45 PM on September 19, 2024"
    ],
    [
        "<ul>
            <li>Green Chinos, $85</li>
            <li>Brown Oxford Shoes, $130</li>
            <li>Light Blue Button-Down Shirt, $75</li>
        </ul>",
        "<p><strong>Name:</strong> David Brown</p>
        <p><strong>Street Address:</strong> 654 Cedar Blvd</p>
        <p><strong>City:</strong> Greenville</p>
        <p><strong>State:</strong> TX</p>
        <p><strong>Zip Code:</strong> 75401</p>
        <p><strong>Country:</strong> USA</p>",
        "10:20 AM on September 20, 2024"
    ],
    [
        "<ul>
            <li>White Linen Shirt, $95</li>
            <li>Beige Khaki Pants, $70</li>
            <li>Brown Loafers, $110</li>
        </ul>",
        "<p><strong>Name:</strong> Laura Martinez</p>
        <p><strong>Street Address:</strong> 987 Spruce Drive</p>
        <p><strong>City:</strong> Brookfield</p>
        <p><strong>State:</strong> FL</p>
        <p><strong>Zip Code:</strong> 32004</p>
        <p><strong>Country:</strong> USA</p>",
        "1:50 PM on September 21, 2024"
    ],
    [
        "<ul>
            <li>Black Evening Gown, $300</li>
            <li>Silver Statement Necklace, $150</li>
            <li>Strappy Heels, $120</li>
        </ul>",
        "<p><strong>Name:</strong> Robert Lee</p>
        <p><strong>Street Address:</strong> 159 Willow Way</p>
        <p><strong>City:</strong> Sunnyvale</p>
        <p><strong>State:</strong> CA</p>
        <p><strong>Zip Code:</strong> 94086</p>
        <p><strong>Country:</strong> USA</p>",
        "6:30 PM on September 22, 2024"
    ],
    [
        "<ul>
            <li>Grey Suit Pants, $110</li>
            <li>Blue Dress Shirt, $85</li>
            <li>Black Dress Shoes, $140</li>
        </ul>",
        "<p><strong>Name:</strong> Linda Anderson</p>
        <p><strong>Street Address:</strong> 753 Aspen Court</p>
        <p><strong>City:</strong> Lakeshore</p>
        <p><strong>State:</strong> WA</p>
        <p><strong>Zip Code:</strong> 98004</p>
        <p><strong>Country:</strong> USA</p>",
        "8:10 AM on September 23, 2024"
    ],
    [
        "<ul>
            <li>Brown Corduroy Jacket, $160</li>
            <li>Tan Trousers, $90</li>
            <li>White Polo Shirt, $50</li>
        </ul>",
        "<p><strong>Name:</strong> James Taylor</p>
        <p><strong>Street Address:</strong> 852 Fir Street</p>
        <p><strong>City:</strong> Hillcrest</p>
        <p><strong>State:</strong> GA</p>
        <p><strong>Zip Code:</strong> 30303</p>
        <p><strong>Country:</strong> USA</p>",
        "3:25 PM on September 24, 2024"
    ],
    [
        "<ul>
            <li>Black Formal Trousers, $100</li>
            <li>White Dress Shirt, $75</li>
            <li>Red Silk Tie, $65</li>
        </ul>",
        "<p><strong>Name:</strong> Patricia Thomas</p>
        <p><strong>Street Address:</strong> 951 Elm Avenue</p>
        <p><strong>City:</strong> Oakwood</p>
        <p><strong>State:</strong> VA</p>
        <p><strong>Zip Code:</strong> 22003</p>
        <p><strong>Country:</strong> USA</p>",
        "12:00 PM on September 25, 2024"
    ],

    [
        "<ul>
            <li>Blue Denim Jacket, $130</li>
            <li>White Graphic T-Shirt, $40</li>
            <li>Black Jeans, $80</li>
        </ul>",
        "<p><strong>Name:</strong> William Harris</p>
        <p><strong>Street Address:</strong> 357 Cypress Lane</p>
        <p><strong>City:</strong> Fairview</p>
        <p><strong>State:</strong> OR</p>
        <p><strong>Zip Code:</strong> 97006</p>
        <p><strong>Country:</strong> USA</p>",
        "5:15 PM on September 26, 2024"
    ],
    [
        "<ul>
            <li>Black Leather Boots, $150</li>
            <li>Grey Wool Coat, $220</li>
            <li>Black Beanie, $25</li>
        </ul>",
        "<p><strong>Name:</strong> Barbara Clark</p>
        <p><strong>Street Address:</strong> 468 Poplar Street</p>
        <p><strong>City:</strong> Riverdale</p>
        <p><strong>State:</strong> MA</p>
        <p><strong>Zip Code:</strong> 02118</p>
        <p><strong>Country:</strong> USA</p>",
        "7:40 AM on September 27, 2024"
    ],
    [
        "<ul>
            <li>White Summer Dress, $90</li>
            <li>Straw Hat, $35</li>
            <li>Sandals, $60</li>
        </ul>",
        "<p><strong>Name:</strong> Richard Lewis</p>
        <p><strong>Street Address:</strong> 642 Palm Drive</p>
        <p><strong>City:</strong> Seaside</p>
        <p><strong>State:</strong> FL</p>
        <p><strong>Zip Code:</strong> 33139</p>
        <p><strong>Country:</strong> USA</p>",
        "10:55 AM on September 28, 2024"
    ],
    [
        "<ul>
            <li>Grey T-Shirt, $30</li>
            <li>Black Joggers, $55</li>
            <li>White Sneakers, $120</li>
        </ul>",
        "<p><strong>Name:</strong> Jennifer Walker</p>
        <p><strong>Street Address:</strong> 789 Oak Avenue</p>
        <p><strong>City:</strong> Maplewood</p>
        <p><strong>State:</strong> MN</p>
        <p><strong>Zip Code:</strong> 55401</p>
        <p><strong>Country:</strong> USA</p>",
        "1:30 PM on September 29, 2024"
    ],
    [
        "<ul>
            <li>Black Cocktail Dress, $180</li>
            <li>Gold Earrings, $75</li>
            <li>Heeled Pumps, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Charles Hall</p>
        <p><strong>Street Address:</strong> 159 Cherry Street</p>
        <p><strong>City:</strong> Highland</p>
        <p><strong>State:</strong> IL</p>
        <p><strong>Zip Code:</strong> 60035</p>
        <p><strong>Country:</strong> USA</p>",
        "4:05 PM on September 30, 2024"
    ],
    [
        "<ul>
            <li>Beige Trench Coat, $210</li>
            <li>Black Turtleneck, $65</li>
            <li>Grey Slacks, $90</li>
        </ul>",
        "<p><strong>Name:</strong> Susan Young</p>
        <p><strong>Street Address:</strong> 258 Pine Street</p>
        <p><strong>City:</strong> Greenville</p>
        <p><strong>State:</strong> NC</p>
        <p><strong>Zip Code:</strong> 27514</p>
        <p><strong>Country:</strong> USA</p>",
        "9:45 AM on October 1, 2024"
    ],
    [
        "<ul>
            <li>Black Sports Watch, $200</li>
            <li>Blue Running Shoes, $130</li>
            <li>White Sports Shorts, $45</li>
        </ul>",
        "<p><strong>Name:</strong> Thomas King</p>
        <p><strong>Street Address:</strong> 369 Cedar Avenue</p>
        <p><strong>City:</strong> Centerville</p>
        <p><strong>State:</strong> OH</p>
        <p><strong>Zip Code:</strong> 45459</p>
        <p><strong>Country:</strong> USA</p>",
        "11:20 AM on October 2, 2024"
    ],
    [
        "<ul>
            <li>Red Evening Gown, $250</li>
            <li>Diamond Necklace, $500</li>
            <li>Black Stilettos, $130</li>
        </ul>",
        "<p><strong>Name:</strong> Karen Wright</p>
        <p><strong>Street Address:</strong> 147 Walnut Street</p>
        <p><strong>City:</strong> Springfield</p>
        <p><strong>State:</strong> MO</p>
        <p><strong>Zip Code:</strong> 65802</p>
        <p><strong>Country:</strong> USA</p>",
        "2:55 PM on October 3, 2024"
    ],
    [
        "<ul>
            <li>Blue Polo Shirt, $55</li>
            <li>Khaki Chinos, $80</li>
            <li>White Canvas Sneakers, $60</li>
        </ul>",
        "<p><strong>Name:</strong> Daniel Lopez</p>
        <p><strong>Street Address:</strong> 753 Birch Road</p>
        <p><strong>City:</strong> Fairview</p>
        <p><strong>State:</strong> KY</p>
        <p><strong>Zip Code:</strong> 40202</p>
        <p><strong>Country:</strong> USA</p>",
        "5:40 PM on October 4, 2024"
    ],
    [
        "<ul>
            <li>Black Leather Backpack, $120</li>
            <li>Grey Hoodie, $60</li>
            <li>Blue Jeans, $85</li>
        </ul>",
        "<p><strong>Name:</strong> Nancy Harris</p>
        <p><strong>Street Address:</strong> 864 Aspen Street</p>
        <p><strong>City:</strong> Lakeview</p>
        <p><strong>State:</strong> NV</p>
        <p><strong>Zip Code:</strong> 89101</p>
        <p><strong>Country:</strong> USA</p>",
        "8:25 AM on October 5, 2024"
    ],
    [
        "<ul>
            <li>White Button-Up Shirt, $70</li>
            <li>Black Dress Pants, $95</li>
            <li>Brown Dress Shoes, $140</li>
        </ul>",
        "<p><strong>Name:</strong> Christopher Martinez</p>
        <p><strong>Street Address:</strong> 975 Pine Avenue</p>
        <p><strong>City:</strong> Meadowbrook</p>
        <p><strong>State:</strong> AZ</p>
        <p><strong>Zip Code:</strong> 85001</p>
        <p><strong>Country:</strong> USA</p>",
        "10:50 AM on October 6, 2024"
    ],
    [
        "<ul>
            <li>Grey Sweater, $65</li>
            <li>Black Skinny Jeans, $80</li>
            <li>White Sneakers, $110</li>
        </ul>",
        "<p><strong>Name:</strong> Jessica Garcia</p>
        <p><strong>Street Address:</strong> 186 Maple Street</p>
        <p><strong>City:</strong> Riverview</p>
        <p><strong>State:</strong> TN</p>
        <p><strong>Zip Code:</strong> 37201</p>
        <p><strong>Country:</strong> USA</p>",
        "1:35 PM on October 7, 2024"
    ],
    [
        "<ul>
            <li>Black Evening Gown, $220</li>
            <li>Silver Bracelet, $80</li>
            <li>Heeled Sandals, $100</li>
        </ul>",
        "<p><strong>Name:</strong> Mark Robinson</p>
        <p><strong>Street Address:</strong> 297 Willow Lane</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MI</p>
        <p><strong>Zip Code:</strong> 48226</p>
        <p><strong>Country:</strong> USA</p>",
        "3:10 PM on October 8, 2024"
    ],
    [
        "<ul>
            <li>Blue Dress Shirt, $85</li>
            <li>Grey Suit Jacket, $150</li>
            <li>Black Dress Pants, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Kimberly Clark</p>
        <p><strong>Street Address:</strong> 408 Cedar Road</p>
        <p><strong>City:</strong> Riverbend</p>
        <p><strong>State:</strong> GA</p>
        <p><strong>Zip Code:</strong> 30303</p>
        <p><strong>Country:</strong> USA</p>",
        "5:55 PM on October 9, 2024"
    ],
    [
        "<ul>
            <li>Black Turtleneck, $60</li>
            <li>Grey Wool Trousers, $100</li>
            <li>Black Chelsea Boots, $140</li>
        </ul>",
        "<p><strong>Name:</strong> Steven Lewis</p>
        <p><strong>Street Address:</strong> 519 Elm Street</p>
        <p><strong>City:</strong> Hilltop</p>
        <p><strong>State:</strong> PA</p>
        <p><strong>Zip Code:</strong> 19103</p>
        <p><strong>Country:</strong> USA</p>",
        "9:05 AM on October 10, 2024"
    ],
    [
        "<ul>
            <li>White Summer Dress, $95</li>
            <li>Blue Denim Jacket, $130</li>
            <li>Brown Ankle Boots, $110</li>
        </ul>",
        "<p><strong>Name:</strong> Michelle Walker</p>
        <p><strong>Street Address:</strong> 630 Poplar Avenue</p>
        <p><strong>City:</strong> Sunnyvale</p>
        <p><strong>State:</strong> CA</p>
        <p><strong>Zip Code:</strong> 94086</p>
        <p><strong>Country:</strong> USA</p>",
        "12:40 PM on October 11, 2024"
    ],
    [
        "<ul>
            <li>Black Leather Jacket, $180</li>
            <li>White T-Shirt, $35</li>
            <li>Blue Jeans, $80</li>
        </ul>",
        "<p><strong>Name:</strong> Kevin Hall</p>
        <p><strong>Street Address:</strong> 741 Aspen Road</p>
        <p><strong>City:</strong> Maplewood</p>
        <p><strong>State:</strong> MO</p>
        <p><strong>Zip Code:</strong> 63101</p>
        <p><strong>Country:</strong> USA</p>",
        "2:25 PM on October 12, 2024"
    ],
    [
        "<ul>
            <li>Grey Hoodie, $60</li>
            <li>Black Joggers, $55</li>
            <li>White Sneakers, $120</li>
        </ul>",
        "<p><strong>Name:</strong> Laura Allen</p>
        <p><strong>Street Address:</strong> 852 Birch Street</p>
        <p><strong>City:</strong> Lakeside</p>
        <p><strong>State:</strong> WA</p>
        <p><strong>Zip Code:</strong> 98004</p>
        <p><strong>Country:</strong> USA</p>",
        "4:50 PM on October 13, 2024"
    ],
    [
        "<ul>
            <li>Blue Polo Shirt, $55</li>
            <li>Khaki Shorts, $70</li>
            <li>White Canvas Shoes, $60</li>
        </ul>",
        "<p><strong>Name:</strong> Brian Young</p>
        <p><strong>Street Address:</strong> 963 Cypress Lane</p>
        <p><strong>City:</strong> Greenville</p>
        <p><strong>State:</strong> TX</p>
        <p><strong>Zip Code:</strong> 75001</p>
        <p><strong>Country:</strong> USA</p>",
        "7:15 AM on October 14, 2024"
    ],
    [
        "<ul>
            <li>Black Formal Shirt, $80</li>
            <li>Grey Dress Pants, $95</li>
            <li>Black Oxford Shoes, $140</li>
        </ul>",
        "<p><strong>Name:</strong> Amanda Hernandez</p>
        <p><strong>Street Address:</strong> 174 Maple Avenue</p>
        <p><strong>City:</strong> Oakridge</p>
        <p><strong>State:</strong> FL</p>
        <p><strong>Zip Code:</strong> 32004</p>
        <p><strong>Country:</strong> USA</p>",
        "9:35 AM on October 15, 2024"
    ],
    [
        "<ul>
            <li>White Blouse, $70</li>
            <li>Black Pencil Skirt, $85</li>
            <li>Black Heels, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Matthew Scott</p>
        <p><strong>Street Address:</strong> 285 Pine Road</p>
        <p><strong>City:</strong> Fairview</p>
        <p><strong>State:</strong> OR</p>
        <p><strong>Zip Code:</strong> 97006</p>
        <p><strong>Country:</strong> USA</p>",
        "12:15 PM on October 16, 2024"
    ],
    [
        "<ul>
            <li>Grey Turtleneck, $65</li>
            <li>Black Jeans, $80</li>
            <li>White Sneakers, $120</li>
        </ul>",
        "<p><strong>Name:</strong> Elizabeth Adams</p>
        <p><strong>Street Address:</strong> 396 Elm Avenue</p>
        <p><strong>City:</strong> Riverbend</p>
        <p><strong>State:</strong> NY</p>
        <p><strong>Zip Code:</strong> 10001</p>
        <p><strong>Country:</strong> USA</p>",
        "2:50 PM on October 17, 2024"
    ],
    [
        "<ul>
            <li>Black Dress Shirt, $75</li>
            <li>Grey Suit, $200</li>
            <li>Black Dress Shoes, $140</li>
        </ul>",
        "<p><strong>Name:</strong> Joshua Turner</p>
        <p><strong>Street Address:</strong> 507 Cedar Lane</p>
        <p><strong>City:</strong> Centerville</p>
        <p><strong>State:</strong> OH</p>
        <p><strong>Zip Code:</strong> 45459</p>
        <p><strong>Country:</strong> USA</p>",
        "5:30 PM on October 18, 2024"
    ],
    [
        "<ul>
            <li>Blue Jeans, $85</li>
            <li>White T-Shirt, $35</li>
            <li>Black Sneakers, $110</li>
        </ul>",
        "<p><strong>Name:</strong> Sarah Parker</p>
        <p><strong>Street Address:</strong> 618 Birch Road</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MI</p>
        <p><strong>Zip Code:</strong> 48226</p>
        <p><strong>Country:</strong> USA</p>",
        "8:10 AM on October 19, 2024"
    ],
    [
        "<ul>
            <li>Red Blazer, $150</li>
            <li>Black Dress Pants, $95</li>
            <li>White Dress Shirt, $75</li>
        </ul>",
        "<p><strong>Name:</strong> Andrew Collins</p>
        <p><strong>Street Address:</strong> 729 Walnut Street</p>
        <p><strong>City:</strong> Meadowbrook</p>
        <p><strong>State:</strong> AZ</p>
        <p><strong>Zip Code:</strong> 85001</p>
        <p><strong>Country:</strong> USA</p>",
        "10:45 AM on October 20, 2024"
    ],
    [
        "<ul>
            <li>Black Leather Belt, $55</li>
            <li>Grey Sweater, $65</li>
            <li>Blue Jeans, $80</li>
        </ul>",
        "<p><strong>Name:</strong> Jessica Murphy</p>
        <p><strong>Street Address:</strong> 840 Aspen Avenue</p>
        <p><strong>City:</strong> Lakeview</p>
        <p><strong>State:</strong> NV</p>
        <p><strong>Zip Code:</strong> 89101</p>
        <p><strong>Country:</strong> USA</p>",
        "1:20 PM on October 21, 2024"
    ],
    [
        "<ul>
            <li>White Blouse, $70</li>
            <li>Black Skirt, $85</li>
            <li>Black Flats, $60</li>
        </ul>",
        "<p><strong>Name:</strong> Ryan Ramirez</p>
        <p><strong>Street Address:</strong> 951 Pine Street</p>
        <p><strong>City:</strong> Oakridge</p>
        <p><strong>State:</strong> FL</p>
        <p><strong>Zip Code:</strong> 32004</p>
        <p><strong>Country:</strong> USA</p>",
        "3:55 PM on October 22, 2024"
    ],
    [
        "<ul>
            <li>Black Hoodie, $60</li>
            <li>Blue Jeans, $80</li>
            <li>White Sneakers, $120</li>
        </ul>",
        "<p><strong>Name:</strong> Amanda Rivera</p>
        <p><strong>Street Address:</strong> 162 Cedar Road</p>
        <p><strong>City:</strong> Fairview</p>
        <p><strong>State:</strong> KY</p>
        <p><strong>Zip Code:</strong> 40202</p>
        <p><strong>Country:</strong> USA</p>",
        "6:30 PM on October 23, 2024"
    ],
    [
        "<ul>
            <li>Grey Suit Jacket, $150</li>
            <li>Blue Dress Shirt, $85</li>
            <li>Black Dress Pants, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Joshua Cox</p>
        <p><strong>Street Address:</strong> 273 Elm Avenue</p>
        <p><strong>City:</strong> Riverbend</p>
        <p><strong>State:</strong> NY</p>
        <p><strong>Zip Code:</strong> 10001</p>
        <p><strong>Country:</strong> USA</p>",
        "9:40 AM on October 24, 2024"
    ],
    [
        "<ul>
            <li>Black Leather Jacket, $180</li>
            <li>White T-Shirt, $35</li>
            <li>Blue Jeans, $80</li>
        </ul>",
        "<p><strong>Name:</strong> Olivia Bell</p>
        <p><strong>Street Address:</strong> 384 Birch Lane</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MO</p>
        <p><strong>Zip Code:</strong> 63101</p>
        <p><strong>Country:</strong> USA</p>",
        "12:25 PM on October 25, 2024"
    ],
    [
        "<ul>
            <li>Grey Turtleneck, $65</li>
            <li>Black Jeans, $80</li>
            <li>White Sneakers, $120</li>
        </ul>",
        "<p><strong>Name:</strong> Ethan Morgan</p>
        <p><strong>Street Address:</strong> 495 Aspen Street</p>
        <p><strong>City:</strong> Lakeview</p>
        <p><strong>State:</strong> WA</p>
        <p><strong>Zip Code:</strong> 98004</p>
        <p><strong>Country:</strong> USA</p>",
        "2:10 PM on October 26, 2024"
    ],
    [
        "<ul>
            <li>Black Dress Shirt, $75</li>
            <li>Grey Suit, $200</li>
            <li>Black Dress Shoes, $140</li>
        </ul>",
        "<p><strong>Name:</strong> Isabella Diaz</p>
        <p><strong>Street Address:</strong> 606 Pine Avenue</p>
        <p><strong>City:</strong> Meadowbrook</p>
        <p><strong>State:</strong> AZ</p>
        <p><strong>Zip Code:</strong> 85001</p>
        <p><strong>Country:</strong> USA</p>",
        "4:35 PM on October 27, 2024"
    ],
    [
        "<ul>
            <li>Blue Polo Shirt, $55</li>
            <li>Khaki Chinos, $80</li>
            <li>White Canvas Sneakers, $60</li>
        </ul>",
        "<p><strong>Name:</strong> Liam Scott</p>
        <p><strong>Street Address:</strong> 717 Cedar Lane</p>
        <p><strong>City:</strong> Fairview</p>
        <p><strong>State:</strong> KY</p>
        <p><strong>Zip Code:</strong> 40202</p>
        <p><strong>Country:</strong> USA</p>",
        "7:00 PM on October 28, 2024"
    ],
    [
        "<ul>
            <li>Black Leather Backpack, $120</li>
            <li>Grey Hoodie, $60</li>
            <li>Blue Jeans, $85</li>
        </ul>",
        "<p><strong>Name:</strong> Sophia Ramirez</p>
        <p><strong>Street Address:</strong> 828 Elm Street</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MI</p>
        <p><strong>Zip Code:</strong> 48226</p>
        <p><strong>Country:</strong> USA</p>",
        "9:30 AM on October 29, 2024"
    ],
    [
        "<ul>
            <li>White Blouse, $70</li>
            <li>Black Pencil Skirt, $85</li>
            <li>Black Heels, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Benjamin Green</p>
        <p><strong>Street Address:</strong> 939 Birch Road</p>
        <p><strong>City:</strong> Oakridge</p>
        <p><strong>State:</strong> FL</p>
        <p><strong>Zip Code:</strong> 32004</p>
        <p><strong>Country:</strong> USA</p>",
        "12:05 PM on October 30, 2024"
    ],
    [
        "<ul>
            <li>Black Hoodie, $60</li>
            <li>Blue Jeans, $80</li>
            <li>White Sneakers, $120</li>
        </ul>",
        "<p><strong>Name:</strong> Ava Nelson</p>
        <p><strong>Street Address:</strong> 140 Cedar Avenue</p>
        <p><strong>City:</strong> Fairview</p>
        <p><strong>State:</strong> KY</p>
        <p><strong>Zip Code:</strong> 40202</p>
        <p><strong>Country:</strong> USA</p>",
        "2:40 PM on October 31, 2024"
    ],
    [
        "<ul>
            <li>Grey Suit Jacket, $150</li>
            <li>Blue Dress Shirt, $85</li>
            <li>Black Dress Pants, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Jackson Carter</p>
        <p><strong>Street Address:</strong> 251 Pine Lane</p>
        <p><strong>City:</strong> Riverbend</p>
        <p><strong>State:</strong> NY</p>
        <p><strong>Zip Code:</strong> 10001</p>
        <p><strong>Country:</strong> USA</p>",
        "5:15 PM on November 1, 2024"
    ],
    [
        "<ul>
            <li>Black Leather Jacket, $180</li>
            <li>White T-Shirt, $35</li>
            <li>Blue Jeans, $80</li>
        </ul>",
        "<p><strong>Name:</strong> Mia Mitchell</p>
        <p><strong>Street Address:</strong> 362 Aspen Street</p>
        <p><strong>City:</strong> Lakeview</p>
        <p><strong>State:</strong> WA</p>
        <p><strong>Zip Code:</strong> 98004</p>
        <p><strong>Country:</strong> USA</p>",
        "7:50 AM on November 2, 2024"
    ],
    [
        "<ul>
            <li>Grey Turtleneck, $65</li>
            <li>Black Jeans, $80</li>
            <li>White Sneakers, $120</li>
        </ul>",
        "<p><strong>Name:</strong> Logan Roberts</p>
        <p><strong>Street Address:</strong> 473 Birch Avenue</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MI</p>
        <p><strong>Zip Code:</strong> 48226</p>
        <p><strong>Country:</strong> USA</p>",
        "10:35 AM on November 3, 2024"
    ],
    [
        "<ul>
            <li>Black Dress Shirt, $75</li>
            <li>Grey Suit, $200</li>
            <li>Black Dress Shoes, $140</li>
        </ul>",
        "<p><strong>Name:</strong> Grace Turner</p>
        <p><strong>Street Address:</strong> 584 Elm Road</p>
        <p><strong>City:</strong> Greenville</p>
        <p><strong>State:</strong> TX</p>
        <p><strong>Zip Code:</strong> 75001</p>
        <p><strong>Country:</strong> USA</p>",
        "1:10 PM on November 4, 2024"
    ],
    [
        "<ul>
            <li>Blue Jeans, $85</li>
            <li>White T-Shirt, $35</li>
            <li>Black Sneakers, $110</li>
        </ul>",
        "<p><strong>Name:</strong> Henry Lewis</p>
        <p><strong>Street Address:</strong> 695 Pine Street</p>
        <p><strong>City:</strong> Oakridge</p>
        <p><strong>State:</strong> FL</p>
        <p><strong>Zip Code:</strong> 32004</p>
        <p><strong>Country:</strong> USA</p>",
        "3:45 PM on November 5, 2024"
    ],
    [
        "<ul>
            <li>Black Leather Belt, $55</li>
            <li>Grey Sweater, $65</li>
            <li>Blue Jeans, $80</li>
        </ul>",
        "<p><strong>Name:</strong> Chloe Walker</p>
        <p><strong>Street Address:</strong> 806 Cedar Lane</p>
        <p><strong>City:</strong> Fairview</p>
        <p><strong>State:</strong> KY</p>
        <p><strong>Zip Code:</strong> 40202</p>
        <p><strong>Country:</strong> USA</p>",
        "6:20 PM on November 6, 2024"
    ],
    [
        "<ul>
            <li>White Blouse, $70</li>
            <li>Black Pencil Skirt, $85</li>
            <li>Black Heels, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Oliver Harris</p>
        <p><strong>Street Address:</strong> 917 Birch Road</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MI</p>
        <p><strong>Zip Code:</strong> 48226</p>
        <p><strong>Country:</strong> USA</p>",
        "9:00 AM on November 7, 2024"
    ],
    [
        "<ul>
            <li>Black Hoodie, $60</li>
            <li>Blue Jeans, $80</li>
            <li>White Sneakers, $120</li>
        </ul>",
        "<p><strong>Name:</strong> Amelia Martinez</p>
        <p><strong>Street Address:</strong> 128 Elm Avenue</p>
        <p><strong>City:</strong> Riverbend</p>
        <p><strong>State:</strong> NY</p>
        <p><strong>Zip Code:</strong> 10001</p>
        <p><strong>Country:</strong> USA</p>",
        "11:25 AM on November 8, 2024"
    ],
    [
        "<ul>
            <li>Grey Suit Jacket, $150</li>
            <li>Blue Dress Shirt, $85</li>
            <li>Black Dress Pants, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Benjamin Lewis</p>
        <p><strong>Street Address:</strong> 239 Pine Lane</p>
        <p><strong>City:</strong> Oakridge</p>
        <p><strong>State:</strong> FL</p>
        <p><strong>Zip Code:</strong> 32004</p>
        <p><strong>Country:</strong> USA</p>",
        "1:50 PM on November 9, 2024"
    ],
    [
        "<ul>
            <li>Black Dress Shirt, $75</li>
            <li>Grey Suit, $200</li>
            <li>Black Dress Shoes, $140</li>
        </ul>",
        "<p><strong>Name:</strong> Ella Thompson</p>
        <p><strong>Street Address:</strong> 340 Cedar Road</p>
        <p><strong>City:</strong> Greenville</p>
        <p><strong>State:</strong> TX</p>
        <p><strong>Zip Code:</strong> 75001</p>
        <p><strong>Country:</strong> USA</p>",
        "4:15 PM on November 10, 2024"
    ],
    [
        "<ul>
            <li>Blue Jeans, $85</li>
            <li>White T-Shirt, $35</li>
            <li>Black Sneakers, $110</li>
        </ul>",
        "<p><strong>Name:</strong> Lucas Clark</p>
        <p><strong>Street Address:</strong> 451 Birch Street</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MI</p>
        <p><strong>Zip Code:</strong> 48226</p>
        <p><strong>Country:</strong> USA</p>",
        "6:40 PM on November 11, 2024"
    ],
    [
        "<ul>
            <li>Black Leather Belt, $55</li>
            <li>Grey Sweater, $65</li>
            <li>Blue Jeans, $80</li>
        </ul>",
        "<p><strong>Name:</strong> Madison Walker</p>
        <p><strong>Street Address:</strong> 562 Cedar Avenue</p>
        <p><strong>City:</strong> Fairview</p>
        <p><strong>State:</strong> KY</p>
        <p><strong>Zip Code:</strong> 40202</p>
        <p><strong>Country:</strong> USA</p>",
        "9:20 AM on November 12, 2024"
    ],
    [
        "<ul>
            <li>White Blouse, $70</li>
            <li>Black Pencil Skirt, $85</li>
            <li>Black Heels, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Elijah Lewis</p>
        <p><strong>Street Address:</strong> 673 Birch Road</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MI</p>
        <p><strong>Zip Code:</strong> 48226</p>
        <p><strong>Country:</strong> USA</p>",
        "11:55 AM on November 13, 2024"
    ],
    [
        "<ul>
            <li>Black Hoodie, $60</li>
            <li>Blue Jeans, $80</li>
            <li>White Sneakers, $120</li>
        </ul>",
        "<p><strong>Name:</strong> Abigail Turner</p>
        <p><strong>Street Address:</strong> 784 Elm Avenue</p>
        <p><strong>City:</strong> Riverbend</p>
        <p><strong>State:</strong> NY</p>
        <p><strong>Zip Code:</strong> 10001</p>
        <p><strong>Country:</strong> USA</p>",
        "2:30 PM on November 14, 2024"
    ],
    [
        "<ul>
            <li>Grey Suit Jacket, $150</li>
            <li>Blue Dress Shirt, $85</li>
            <li>Black Dress Pants, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Henry Harris</p>
        <p><strong>Street Address:</strong> 895 Pine Lane</p>
        <p><strong>City:</strong> Oakridge</p>
        <p><strong>State:</strong> FL</p>
        <p><strong>Zip Code:</strong> 32004</p>
        <p><strong>Country:</strong> USA</p>",
        "5:05 PM on November 15, 2024"
    ],
    [
        "<ul>
            <li>Black Dress Shirt, $75</li>
            <li>Grey Suit, $200</li>
            <li>Black Dress Shoes, $140</li>
        </ul>",
        "<p><strong>Name:</strong> Charlotte Martin</p>
        <p><strong>Street Address:</strong> 906 Cedar Road</p>
        <p><strong>City:</strong> Greenville</p>
        <p><strong>State:</strong> TX</p>
        <p><strong>Zip Code:</strong> 75001</p>
        <p><strong>Country:</strong> USA</p>",
        "7:30 PM on November 16, 2024"
    ],
    [
        "<ul>
            <li>Blue Jeans, $85</li>
            <li>White T-Shirt, $35</li>
            <li>Black Sneakers, $110</li>
        </ul>",
        "<p><strong>Name:</strong> Logan Lee</p>
        <p><strong>Street Address:</strong> 117 Birch Street</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MI</p>
        <p><strong>Zip Code:</strong> 48226</p>
        <p><strong>Country:</strong> USA</p>",
        "10:20 AM on November 17, 2024"
    ],
    [
        "<ul>
            <li>Black Leather Belt, $55</li>
            <li>Grey Sweater, $65</li>
            <li>Blue Jeans, $80</li>
        </ul>",
        "<p><strong>Name:</strong> Grace Clark</p>
        <p><strong>Street Address:</strong> 228 Cedar Avenue</p>
        <p><strong>City:</strong> Fairview</p>
        <p><strong>State:</strong> KY</p>
        <p><strong>Zip Code:</strong> 40202</p>
        <p><strong>Country:</strong> USA</p>",
        "12:45 PM on November 18, 2024"
    ],
    [
        "<ul>
            <li>White Blouse, $70</li>
            <li>Black Pencil Skirt, $85</li>
            <li>Black Heels, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Samuel Walker</p>
        <p><strong>Street Address:</strong> 339 Birch Road</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MI</p>
        <p><strong>Zip Code:</strong> 48226</p>
        <p><strong>Country:</strong> USA</p>",
        "3:10 PM on November 19, 2024"
    ],
    [
        "<ul>
            <li>Black Hoodie, $60</li>
            <li>Blue Jeans, $80</li>
            <li>White Sneakers, $120</li>
        </ul>",
        "<p><strong>Name:</strong> Victoria Lewis</p>
        <p><strong>Street Address:</strong> 450 Elm Avenue</p>
        <p><strong>City:</strong> Riverbend</p>
        <p><strong>State:</strong> NY</p>
        <p><strong>Zip Code:</strong> 10001</p>
        <p><strong>Country:</strong> USA</p>",
        "5:35 PM on November 20, 2024"
    ],
    [
        "<ul>
            <li>Grey Suit Jacket, $150</li>
            <li>Blue Dress Shirt, $85</li>
            <li>Black Dress Pants, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Daniel Harris</p>
        <p><strong>Street Address:</strong> 561 Pine Lane</p>
        <p><strong>City:</strong> Oakridge</p>
        <p><strong>State:</strong> FL</p>
        <p><strong>Zip Code:</strong> 32004</p>
        <p><strong>Country:</strong> USA</p>",
        "8:00 AM on November 21, 2024"
    ],
    [
        "<ul>
            <li>Black Dress Shirt, $75</li>
            <li>Grey Suit, $200</li>
            <li>Black Dress Shoes, $140</li>
        </ul>",
        "<p><strong>Name:</strong> Avery Martinez</p>
        <p><strong>Street Address:</strong> 672 Cedar Road</p>
        <p><strong>City:</strong> Greenville</p>
        <p><strong>State:</strong> TX</p>
        <p><strong>Zip Code:</strong> 75001</p>
        <p><strong>Country:</strong> USA</p>",
        "10:25 AM on November 22, 2024"
    ],
    [
        "<ul>
            <li>Blue Jeans, $85</li>
            <li>White T-Shirt, $35</li>
            <li>Black Sneakers, $110</li>
        </ul>",
        "<p><strong>Name:</strong> Mia Lewis</p>
        <p><strong>Street Address:</strong> 783 Birch Street</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MI</p>
        <p><strong>Zip Code:</strong> 48226</p>
        <p><strong>Country:</strong> USA</p>",
        "1:50 PM on November 23, 2024"
    ],
    [
        "<ul>
            <li>Black Leather Belt, $55</li>
            <li>Grey Sweater, $65</li>
            <li>Blue Jeans, $80</li>
        </ul>",
        "<p><strong>Name:</strong> Alexander Clark</p>
        <p><strong>Street Address:</strong> 894 Cedar Avenue</p>
        <p><strong>City:</strong> Fairview</p>
        <p><strong>State:</strong> KY</p>
        <p><strong>Zip Code:</strong> 40202</p>
        <p><strong>Country:</strong> USA</p>",
        "4:15 PM on November 24, 2024"
    ],
    [
        "<ul>
            <li>White Blouse, $70</li>
            <li>Black Pencil Skirt, $85</li>
            <li>Black Heels, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Harper Walker</p>
        <p><strong>Street Address:</strong> 105 Elm Road</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MI</p>
        <p><strong>Zip Code:</strong> 48226</p>
        <p><strong>Country:</strong> USA</p>",
        "6:40 PM on November 25, 2024"
    ],
    [
        "<ul>
            <li>Black Hoodie, $60</li>
            <li>Blue Jeans, $80</li>
            <li>White Sneakers, $120</li>
        </ul>",
        "<p><strong>Name:</strong> Evelyn Harris</p>
        <p><strong>Street Address:</strong> 216 Birch Avenue</p>
        <p><strong>City:</strong> Riverbend</p>
        <p><strong>State:</strong> NY</p>
        <p><strong>Zip Code:</strong> 10001</p>
        <p><strong>Country:</strong> USA</p>",
        "9:05 AM on November 26, 2024"
    ],
    [
        "<ul>
            <li>Grey Suit Jacket, $150</li>
            <li>Blue Dress Shirt, $85</li>
            <li>Black Dress Pants, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Abigail Johnson</p>
        <p><strong>Street Address:</strong> 327 Pine Lane</p>
        <p><strong>City:</strong> Oakridge</p>
        <p><strong>State:</strong> FL</p>
        <p><strong>Zip Code:</strong> 32004</p>
        <p><strong>Country:</strong> USA</p>",
        "11:30 AM on November 27, 2024"
    ],
    [
        "<ul>
            <li>Black Dress Shirt, $75</li>
            <li>Grey Suit, $200</li>
            <li>Black Dress Shoes, $140</li>
        </ul>",
        "<p><strong>Name:</strong> William Martinez</p>
        <p><strong>Street Address:</strong> 438 Cedar Road</p>
        <p><strong>City:</strong> Greenville</p>
        <p><strong>State:</strong> TX</p>
        <p><strong>Zip Code:</strong> 75001</p>
        <p><strong>Country:</strong> USA</p>",
        "2:55 PM on November 28, 2024"
    ],
    [
        "<ul>
            <li>Blue Jeans, $85</li>
            <li>White T-Shirt, $35</li>
            <li>Black Sneakers, $110</li>
        </ul>",
        "<p><strong>Name:</strong> Logan Brown</p>
        <p><strong>Street Address:</strong> 549 Birch Street</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MI</p>
        <p><strong>Zip Code:</strong> 48226</p>
        <p><strong>Country:</strong> USA</p>",
        "5:20 PM on November 29, 2024"
    ],
    [
        "<ul>
            <li>Black Leather Belt, $55</li>
            <li>Grey Sweater, $65</li>
            <li>Blue Jeans, $80</li>
        </ul>",
        "<p><strong>Name:</strong> Zoe Davis</p>
        <p><strong>Street Address:</strong> 660 Cedar Avenue</p>
        <p><strong>City:</strong> Fairview</p>
        <p><strong>State:</strong> KY</p>
        <p><strong>Zip Code:</strong> 40202</p>
        <p><strong>Country:</strong> USA</p>",
        "7:45 PM on November 30, 2024"
    ],
    [
        "<ul>
            <li>White Blouse, $70</li>
            <li>Black Pencil Skirt, $85</li>
            <li>Black Heels, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Jackson White</p>
        <p><strong>Street Address:</strong> 771 Elm Road</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MI</p>
        <p><strong>Zip Code:</strong> 48226</p>
        <p><strong>Country:</strong> USA</p>",
        "10:00 AM on December 1, 2024"
    ],
    [
        "<ul>
            <li>Black Hoodie, $60</li>
            <li>Blue Jeans, $80</li>
            <li>White Sneakers, $120</li>
        </ul>",
        "<p><strong>Name:</strong> Lily Thompson</p>
        <p><strong>Street Address:</strong> 882 Birch Avenue</p>
        <p><strong>City:</strong> Riverbend</p>
        <p><strong>State:</strong> NY</p>
        <p><strong>Zip Code:</strong> 10001</p>
        <p><strong>Country:</strong> USA</p>",
        "12:25 PM on December 2, 2024"
    ],
    [
        "<ul>
            <li>Grey Suit Jacket, $150</li>
            <li>Blue Dress Shirt, $85</li>
            <li>Black Dress Pants, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Oliver Garcia</p>
        <p><strong>Street Address:</strong> 993 Pine Lane</p>
        <p><strong>City:</strong> Oakridge</p>
        <p><strong>State:</strong> FL</p>
        <p><strong>Zip Code:</strong> 32004</p>
        <p><strong>Country:</strong> USA</p>",
        "2:40 PM on December 3, 2024"
    ],
    [
        "<ul>
            <li>Black Dress Shirt, $75</li>
            <li>Grey Suit, $200</li>
            <li>Black Dress Shoes, $140</li>
        </ul>",
        "<p><strong>Name:</strong> Amelia Martinez</p>
        <p><strong>Street Address:</strong> 104 Cedar Road</p>
        <p><strong>City:</strong> Greenville</p>
        <p><strong>State:</strong> TX</p>
        <p><strong>Zip Code:</strong> 75001</p>
        <p><strong>Country:</strong> USA</p>",
        "5:05 PM on December 4, 2024"
    ],
    [
        "<ul>
            <li>Blue Jeans, $85</li>
            <li>White T-Shirt, $35</li>
            <li>Black Sneakers, $110</li>
        </ul>",
        "<p><strong>Name:</strong> Benjamin Rodriguez</p>
        <p><strong>Street Address:</strong> 215 Birch Street</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MI</p>
        <p><strong>Zip Code:</strong> 48226</p>
        <p><strong>Country:</strong> USA</p>",
        "7:30 PM on December 5, 2024"
    ],
    [
        "<ul>
            <li>Black Leather Belt, $55</li>
            <li>Grey Sweater, $65</li>
            <li>Blue Jeans, $80</li>
        </ul>",
        "<p><strong>Name:</strong> Sofia Lewis</p>
        <p><strong>Street Address:</strong> 326 Cedar Avenue</p>
        <p><strong>City:</strong> Fairview</p>
        <p><strong>State:</strong> KY</p>
        <p><strong>Zip Code:</strong> 40202</p>
        <p><strong>Country:</strong> USA</p>",
        "10:15 AM on December 6, 2024"
    ],
    [
        "<ul>
            <li>White Blouse, $70</li>
            <li>Black Pencil Skirt, $85</li>
            <li>Black Heels, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Lucas Walker</p>
        <p><strong>Street Address:</strong> 437 Elm Road</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MI</p>
        <p><strong>Zip Code:</strong> 48226</p>
        <p><strong>Country:</strong> USA</p>",
        "12:40 PM on December 7, 2024"
    ],
    [
        "<ul>
            <li>Black Hoodie, $60</li>
            <li>Blue Jeans, $80</li>
            <li>White Sneakers, $120</li>
        </ul>",
        "<p><strong>Name:</strong> Chloe Johnson</p>
        <p><strong>Street Address:</strong> 548 Birch Avenue</p>
        <p><strong>City:</strong> Riverbend</p>
        <p><strong>State:</strong> NY</p>
        <p><strong>Zip Code:</strong> 10001</p>
        <p><strong>Country:</strong> USA</p>",
        "3:25 PM on December 8, 2024"
    ],
    [
        "<ul>
            <li>Grey Suit Jacket, $150</li>
            <li>Blue Dress Shirt, $85</li>
            <li>Black Dress Pants, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Elijah Brown</p>
        <p><strong>Street Address:</strong> 659 Pine Lane</p>
        <p><strong>City:</strong> Oakridge</p>
        <p><strong>State:</strong> FL</p>
        <p><strong>Zip Code:</strong> 32004</p>
        <p><strong>Country:</strong> USA</p>",
        "5:40 PM on December 9, 2024"
    ],
    [
        "<ul>
            <li>Black Dress Shirt, $75</li>
            <li>Grey Suit, $200</li>
            <li>Black Dress Shoes, $140</li>
        </ul>",
        "<p><strong>Name:</strong> Lily Davis</p>
        <p><strong>Street Address:</strong> 770 Cedar Road</p>
        <p><strong>City:</strong> Greenville</p>
        <p><strong>State:</strong> TX</p>
        <p><strong>Zip Code:</strong> 75001</p>
        <p><strong>Country:</strong> USA</p>",
        "8:05 AM on December 10, 2024"
    ],
    [
        "<ul>
            <li>Blue Jeans, $85</li>
            <li>White T-Shirt, $35</li>
            <li>Black Sneakers, $110</li>
        </ul>",
        "<p><strong>Name:</strong> Mason Wilson</p>
        <p><strong>Street Address:</strong> 881 Birch Street</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MI</p>
        <p><strong>Zip Code:</strong> 48226</p>
        <p><strong>Country:</strong> USA</p>",
        "10:30 AM on December 11, 2024"
    ],
    [
        "<ul>
            <li>Black Leather Belt, $55</li>
            <li>Grey Sweater, $65</li>
            <li>Blue Jeans, $80</li>
        </ul>",
        "<p><strong>Name:</strong> Amelia Martinez</p>
        <p><strong>Street Address:</strong> 992 Cedar Avenue</p>
        <p><strong>City:</strong> Fairview</p>
        <p><strong>State:</strong> KY</p>
        <p><strong>Zip Code:</strong> 40202</p>
        <p><strong>Country:</strong> USA</p>",
        "1:05 PM on December 12, 2024"
    ],
    [
        "<ul>
            <li>White Blouse, $70</li>
            <li>Black Pencil Skirt, $85</li>
            <li>Black Heels, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Alexander Lee</p>
        <p><strong>Street Address:</strong> 103 Elm Road</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MI</p>
        <p><strong>Zip Code:</strong> 48226</p>
        <p><strong>Country:</strong> USA</p>",
        "3:30 PM on December 13, 2024"
    ],
    [
        "<ul>
            <li>Black Hoodie, $60</li>
            <li>Blue Jeans, $80</li>
            <li>White Sneakers, $120</li>
        </ul>",
        "<p><strong>Name:</strong> Harper Brown</p>
        <p><strong>Street Address:</strong> 214 Birch Avenue</p>
        <p><strong>City:</strong> Riverbend</p>
        <p><strong>State:</strong> NY</p>
        <p><strong>Zip Code:</strong> 10001</p>
        <p><strong>Country:</strong> USA</p>",
        "6:55 PM on December 14, 2024"
    ],
    [
        "<ul>
            <li>Grey Suit Jacket, $150</li>
            <li>Blue Dress Shirt, $85</li>
            <li>Black Dress Pants, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Charlotte Martinez</p>
        <p><strong>Street Address:</strong> 325 Pine Lane</p>
        <p><strong>City:</strong> Oakridge</p>
        <p><strong>State:</strong> FL</p>
        <p><strong>Zip Code:</strong> 32004</p>
        <p><strong>Country:</strong> USA</p>",
        "9:20 AM on December 15, 2024"
    ],
    [
        "<ul>
            <li>Black Dress Shirt, $75</li>
            <li>Grey Suit, $200</li>
            <li>Black Dress Shoes, $140</li>
        </ul>",
        "<p><strong>Name:</strong> Elijah Wilson</p>
        <p><strong>Street Address:</strong> 436 Cedar Road</p>
        <p><strong>City:</strong> Greenville</p>
        <p><strong>State:</strong> TX</p>
        <p><strong>Zip Code:</strong> 75001</p>
        <p><strong>Country:</strong> USA</p>",
        "11:45 AM on December 16, 2024"
    ],
    [
        "<ul>
            <li>Blue Jeans, $85</li>
            <li>White T-Shirt, $35</li>
            <li>Black Sneakers, $110</li>
        </ul>",
        "<p><strong>Name:</strong> Abigail Brown</p>
        <p><strong>Street Address:</strong> 547 Birch Street</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MI</p>
        <p><strong>Zip Code:</strong> 48226</p>
        <p><strong>Country:</strong> USA</p>",
        "2:10 PM on December 17, 2024"
    ],
    [
        "<ul>
            <li>Black Leather Belt, $55</li>
            <li>Grey Sweater, $65</li>
            <li>Blue Jeans, $80</li>
        </ul>",
        "<p><strong>Name:</strong> Mia Davis</p>
        <p><strong>Street Address:</strong> 658 Cedar Avenue</p>
        <p><strong>City:</strong> Fairview</p>
        <p><strong>State:</strong> KY</p>
        <p><strong>Zip Code:</strong> 40202</p>
        <p><strong>Country:</strong> USA</p>",
        "4:35 PM on December 18, 2024"
    ],
    [
        "<ul>
            <li>White Blouse, $70</li>
            <li>Black Pencil Skirt, $85</li>
            <li>Black Heels, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Lucas Thompson</p>
        <p><strong>Street Address:</strong> 769 Elm Road</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MI</p>
        <p><strong>Zip Code:</strong> 48226</p>
        <p><strong>Country:</strong> USA</p>",
        "7:00 PM on December 19, 2024"
    ],
    [
        "<ul>
            <li>Black Hoodie, $60</li>
            <li>Blue Jeans, $80</li>
            <li>White Sneakers, $120</li>
        </ul>",
        "<p><strong>Name:</strong> Grace Johnson</p>
        <p><strong>Street Address:</strong> 870 Birch Avenue</p>
        <p><strong>City:</strong> Riverbend</p>
        <p><strong>State:</strong> NY</p>
        <p><strong>Zip Code:</strong> 10001</p>
        <p><strong>Country:</strong> USA</p>",
        "9:25 AM on December 20, 2024"
    ],
    [
        "<ul>
            <li>Grey Suit Jacket, $150</li>
            <li>Blue Dress Shirt, $85</li>
            <li>Black Dress Pants, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Liam Brown</p>
        <p><strong>Street Address:</strong> 981 Pine Lane</p>
        <p><strong>City:</strong> Oakridge</p>
        <p><strong>State:</strong> FL</p>
        <p><strong>Zip Code:</strong> 32004</p>
        <p><strong>Country:</strong> USA</p>",
        "11:50 AM on December 21, 2024"
    ],
    [
        "<ul>
            <li>Black Dress Shirt, $75</li>
            <li>Grey Suit, $200</li>
            <li>Black Dress Shoes, $140</li>
        </ul>",
        "<p><strong>Name:</strong> Charlotte Davis</p>
        <p><strong>Street Address:</strong> 192 Cedar Road</p>
        <p><strong>City:</strong> Greenville</p>
        <p><strong>State:</strong> TX</p>
        <p><strong>Zip Code:</strong> 75001</p>
        <p><strong>Country:</strong> USA</p>",
        "2:35 PM on December 22, 2024"
    ],
    [
        "<ul>
            <li>Blue Jeans, $85</li>
            <li>White T-Shirt, $35</li>
            <li>Black Sneakers, $110</li>
        </ul>",
        "<p><strong>Name:</strong> Oliver Garcia</p>
        <p><strong>Street Address:</strong> 303 Birch Street</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MI</p>
        <p><strong>Zip Code:</strong> 48226</p>
        <p><strong>Country:</strong> USA</p>",
        "5:00 PM on December 23, 2024"
    ],
    [
        "<ul>
            <li>Black Leather Belt, $55</li>
            <li>Grey Sweater, $65</li>
            <li>Blue Jeans, $80</li>
        </ul>",
        "<p><strong>Name:</strong> Isabella Thompson</p>
        <p><strong>Street Address:</strong> 414 Cedar Avenue</p>
        <p><strong>City:</strong> Fairview</p>
        <p><strong>State:</strong> KY</p>
        <p><strong>Zip Code:</strong> 40202</p>
        <p><strong>Country:</strong> USA</p>",
        "7:25 PM on December 24, 2024"
    ],
    [
        "<ul>
            <li>White Blouse, $70</li>
            <li>Black Pencil Skirt, $85</li>
            <li>Black Heels, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Mason White</p>
        <p><strong>Street Address:</strong> 525 Elm Road</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MI</p>
        <p><strong>Zip Code:</strong> 48226</p>
        <p><strong>Country:</strong> USA</p>",
        "9:40 AM on December 25, 2024"
    ],
    [
        "<ul>
            <li>Black Hoodie, $60</li>
            <li>Blue Jeans, $80</li>
            <li>White Sneakers, $120</li>
        </ul>",
        "<p><strong>Name:</strong> Amelia Johnson</p>
        <p><strong>Street Address:</strong> 636 Birch Avenue</p>
        <p><strong>City:</strong> Riverbend</p>
        <p><strong>State:</strong> NY</p>
        <p><strong>Zip Code:</strong> 10001</p>
        <p><strong>Country:</strong> USA</p>",
        "12:55 PM on December 26, 2024"
    ],
    [
        "<ul>
            <li>Grey Suit Jacket, $150</li>
            <li>Blue Dress Shirt, $85</li>
            <li>Black Dress Pants, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Ethan Brown</p>
        <p><strong>Street Address:</strong> 747 Pine Lane</p>
        <p><strong>City:</strong> Oakridge</p>
        <p><strong>State:</strong> FL</p>
        <p><strong>Zip Code:</strong> 32004</p>
        <p><strong>Country:</strong> USA</p>",
        "3:20 PM on December 27, 2024"
    ],
    [
        "<ul>
            <li>Black Dress Shirt, $75</li>
            <li>Grey Suit, $200</li>
            <li>Black Dress Shoes, $140</li>
        </ul>",
        "<p><strong>Name:</strong> Lily Martinez</p>
        <p><strong>Street Address:</strong> 858 Cedar Road</p>
        <p><strong>City:</strong> Greenville</p>
        <p><strong>State:</strong> TX</p>
        <p><strong>Zip Code:</strong> 75001</p>
        <p><strong>Country:</strong> USA</p>",
        "5:45 PM on December 28, 2024"
    ],
    [
        "<ul>
            <li>Blue Jeans, $85</li>
            <li>White T-Shirt, $35</li>
            <li>Black Sneakers, $110</li>
        </ul>",
        "<p><strong>Name:</strong> Noah Wilson</p>
        <p><strong>Street Address:</strong> 969 Birch Street</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MI</p>
        <p><strong>Zip Code:</strong> 48226</p>
        <p><strong>Country:</strong> USA</p>",
        "8:10 AM on December 29, 2024"
    ],
    [
        "<ul>
            <li>Black Leather Belt, $55</li>
            <li>Grey Sweater, $65</li>
            <li>Blue Jeans, $80</li>
        </ul>",
        "<p><strong>Name:</strong> Charlotte Brown</p>
        <p><strong>Street Address:</strong> 107 Cedar Avenue</p>
        <p><strong>City:</strong> Fairview</p>
        <p><strong>State:</strong> KY</p>
        <p><strong>Zip Code:</strong> 40202</p>
        <p><strong>Country:</strong> USA</p>",
        "10:35 AM on December 30, 2024"
    ],
    [
        "<ul>
            <li>White Blouse, $70</li>
            <li>Black Pencil Skirt, $85</li>
            <li>Black Heels, $95</li>
        </ul>",
        "<p><strong>Name:</strong> Liam Davis</p>
        <p><strong>Street Address:</strong> 118 Elm Road</p>
        <p><strong>City:</strong> Brookside</p>
        <p><strong>State:</strong> MI</p>
        <p><strong>Zip Code:</strong> 48226</p>
        <p><strong>Country:</strong> USA</p>",
        "1:50 PM on December 31, 2024"
    ]
];


$d=$data[$order];



$page = <<< XXXXXX



<h2 >Challenge: Sequential IDOR Exploitation</h2>
<h3  >Find data of other orders</h3>      
<hr class="divider"> 

<style>
    /* General Styles */
    .lab {
        font-family: 'Playfair Display', serif;
        background: linear-gradient(135deg, #8e44ad, #3498db);
        margin: 0;
        padding: 0;
        display: flex;
        align-items: center;
        justify-content: center;
        min-height: 100vh;
        color: #ffffff;
    }

    li {
        color: black;
    }

    .container {
        background-color: rgba(255, 255, 255, 0.85);
        max-width: 480px;
        width: 90%;
        padding: 30px;
        border-radius: 16px;
        box-shadow: 0 8px 30px rgba(0, 0, 0, 0.25);
        text-align: center;
        transition: all 0.3s ease;
        margin: 30px 0;
    }

    /* Header */
    .container h1 {
        color: #8e44ad;
        font-size: 2em;
        margin-bottom: 0.75em;
        font-weight: 700;
        letter-spacing: 1px;
        text-transform: uppercase;
    }

    /* Paragraphs */
    .container p {
        color: #555;
        font-size: 1.1em;
        line-height: 1.8;
        margin: 10px 0;
    }

    /* Summary Box */
    .summary-box {
        background: linear-gradient(135deg, #f9f9f9, #f0f0f0);
        padding: 20px;
        margin-top: 1.5em;
        border-radius: 12px;
        text-align: left;
        border: 1px solid #d1d1d1;
    }

    .summary-item {
        font-weight: 600;
        color: #8e44ad;
    }

    /* Glamorous Accents */
    .summary-box p span {
        color: #c0392b;
    }

    /* Footer */
    .footer {
        margin-top: 25px;
        font-size: 0.9em;
        color: #555;
        font-style: italic;
    }

    /* Glamorous Glow */
    .container:hover {
        box-shadow: 0 12px 40px rgba(0, 0, 0, 0.35);
        transform: translateY(-5px);
    }

    .container h1:hover {
        color: #c0392b;
    }

    /* Glow Effect */
    .summary-box:hover {
        background: linear-gradient(135deg, #fdfdfd, #f8f8f8);
        border-color: #c0392b;
    }
</style>



<div class="lab">

<div class="container">
    <h1>Thank You for your order. </h1>
    <p>Here are your order details</p>
   
    <div class="summary-box">
        <p><span class="summary-item">Order:</span> $d[0]</p>
        <p><span class="summary-item">Address:</span> $d[1]</p>
        <p><span class="summary-item">Date ordered:</span> $d[2]</p>
    </div>

    <p>Please contact support in case of any questions.</p>

    <div class="footer">
        <p>Order from us again to get frequent customer benefits.</p>
    </div>
</div>

</div>




XXXXXX;






    load_header("Order");
    echo($page);
    load_footer();




?>
