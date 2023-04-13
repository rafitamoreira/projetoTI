import sys
import time
import requests # bibliotecas
import winsound

def play_sound(x):
    winsound.PlaySound(x, winsound.SND_ALIAS)
    
try :

    print( "Prima CTRL+C para terminar")
    while True: # ciclo 
        print("____LER temperatura do servidor______")
        r=requests.get('http://127.0.0.1/ti/api/api.php?nome=temperatura')  
        if r.status_code==200:
            print(r.text)
            if float(r.text) > 15:
                print("Temperatura Alta:"+ r.text)
                play_sound("Alarm.wav")
            else:
                print("Temperatura Baixa:"+ r.text)
        else:
            print("O pedido HTTP não foi bem sucedido")
        time.sleep(2)    


except KeyboardInterrupt: # caso haja interrupção CTRL+C
    print( "Programa terminado pelo utilizador")

except : # erro
    print( "Ocorreu um erro:", sys.exc_info() )

finally : #final do programa
    print( "Fim do programa") 