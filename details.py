import mysql.connector

conn = mysql.connector.connect(host="localhost", user="root", password="", database="agronomics")

cursor=conn.cursor()

selectquery="select * from users "

cursor.execute(selectquery)

records=cursor.fetchall()

print("No. of users", cursor.rowcount)

for row in records:

	print("user name ", row[0])

	print("Email", row[1])


print()

cursor.close()

conn.close()