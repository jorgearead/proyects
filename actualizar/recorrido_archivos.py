import urllib.request
def recorrido():
    f = open('dato.txt','r')
    dato = f.read()
    f.close()
    f2 = open('dato.txt','r')
    dato2 = f2.read()
    f2.close()#"https://www.e-facturasaas.com/WebSite/Modulos/Descarga/DescargaCFD.aspx?descarga=FA_1779&tipo=xml"
    url =  "https://www.e-facturasaas.com/WebSite/Modulos/Descarga/DescargaCFD.aspx?descarga=FA_"
    url_fin= "&tipo=xml"
    for datos in range(dato,dato2):
        print(datos)
        url_ingresar = url+str(datos)+url_fin
        #dir(request)
        #archivo = request.urlopen(url_ingresar)
        #type(archivo)
        try:
            r=urllib.request.urlopen(url_ingresar)
            f=open("archivo"+str(datos)+".xml","wb")
            f.write(r.read())
            f.close
        except Exception:
            print("no se pudo descargar")
    
    

