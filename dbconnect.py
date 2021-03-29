import mysql.connector

db = mysql.connector.connect(
    host = "midtermcc.mysql.database.azure.com",
    user = "cc_admin@midtermcc",
    password = "Cloudcomputing123"
)
print(db)