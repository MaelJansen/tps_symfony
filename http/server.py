import socket
import socketserver
import datetime


class WebServer(socketserver.BaseRequestHandler):

    def handle(self):
        client = self.request
        io = client.makefile()

        # Receiving client commands line per line
        print('> Request: ')
        receivingHeaders = True
        resultatFinale = " "
        while receivingHeaders:
            line = io.readline().strip()
            print(line)
            tab=line.split(' ')
            resultat = 0
            if(tab[0]=='GET'):
                tab2 = tab[1].split('?')
                Ressource = tab[1]
                if (len(tab2)>1):
                    resultat = tab2[1]
                    resultatFinale = "/test2?"+str(resultat)
                    tab3=tab2[1].split('&')
                    tab4=tab3[0].split('=')
                    a = tab4[1]
                    tab5=tab3[1].split('=')
                    b = tab5[1]
                    res = a+b
            if line == '':
                receivingHeaders = False

        # Creating a response for the client
        print('> Response: ')
        if(Ressource=="/"):
            response = "HTTP/1.1 200 OK\r\n"
            response += "Content-type: text/html\r\n"
            response += "\r\n"
            response += datetime.datetime.now().strftime('%H:%M:%S')
        elif (Ressource=="/test"):
            response = "HTTP/1.1 200 OK\r\n"
            response += "Content-type: text/html\r\n"
            response += "\r\n"
            response += "<h1>Test</h1>"
        elif (Ressource=="/test2"):
            response = "HTTP/1.1 200 OK\r\n"
            response += "Content-type: text/html\r\n"
            response += "\r\n"
            response += "<h1>Test2</h1>"
            response += "<h1></h1>"
            response += "<form method=\"get\">\n"
            response += "Nombre 1: <input type=\"text\" name=\"n1\" /><br />\r\n"
            response += "Nombre 2: <input type=\"text\" name=\"n2\" /><br />\r\n"
            response += "<input type=\"submit\" value=\"Additioner!\" />\r\n"
            response += "</form>"
        elif (Ressource==resultatFinale):
            response = "HTTP/1.1 200 OK\r\n"
            response += "Content-type: text/html\r\n"
            response += "\r\n"
            response += "<h1>Resutlat :</h1>"
            response += "<h3>Le resultat est : "+str(res)+"</h3>"
        elif (Ressource=="/Image"):
            response = "HTTP/1.1 200 OK\r\n"
            response += "Content-type: text/html\r\n"
            response += "\r\n"
            response += '<img src="image.jpg">'
        elif Ressource=="/image.jpg":
            response = "HTTP/1.1 200 OK\r\n"
            response += "Content-type: img/jpg\r\n"
            response += "\r\n"
            img = open('image.jpg', 'rb')
            data = img.read()
            img.close()
            client.sendall(data)
        else :
            response = "HTTP/1.1 404 Not found\r\n"
            response += "Content-type: text/html\r\n"
            response += "\r\n"
            response += "<h2>Page introuvable</h2>"

        print(response)
        client.sendall(response.encode('utf-8'))



HOST, PORT = "127.0.0.1", 8080
socketserver.TCPServer.allow_reuse_address = True
with socketserver.TCPServer((HOST, PORT), WebServer) as server:
    server.serve_forever()
