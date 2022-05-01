#! /bin/python3
# Module Imports
import mysql.connector as mariadb
import sys

# Connect to MariaDB Platform
conn = mariadb.connect(
    user="root",
    password="my",
    host="localhost",
    port=3306,
    database="server0"

)
conn1 = mariadb.connect(
    user="root",
    password="my",
    host="localhost",
    port=3306,
    database="server0"

)

sqlSelect = "show tables;"
sqlSelect1 = "explain phonebook"
# Get Cursor
cur = conn.cursor()
cur1 = conn1.cursor()

cur.execute(sqlSelect)
cur1.execute(sqlSelect1)
 
resultadoSQL = cur.fetchall()
resultadoSQL1 = cur1.fetchall()

#Cerramos el cursor y la conexión con MySQL
#conexionMySQL.close()
 
#Mostramos el resultado por pantalla

sqlSelect2 = "select * from phonebook"
cur2 = conn.cursor()
cur2.execute(sqlSelect2)
res = cur2.fetchall()


print ("<tt>hi<b>")
print (cur)
print ("<br>")
print (resultadoSQL)
print ("<br>")
print (">.:$ Python-Mysql")
print ("<br>")
print (cur2)
print ("<br>")
print (res)
print ("<br>")
print (cur1)
print ("<br>")
#print (resultadoSQL1)
print ("</b></tt>")

cur.close()
cur1.close()
cur2.close()

