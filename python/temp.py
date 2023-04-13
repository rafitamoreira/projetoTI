import requests
import sys
import time
import winsound
r=requests.get('http://127.0.0.1/ti/api/api.php?nome=temperatura')

import simpleaudio as sa

wave_obj = simpleaudio.WaveObject.from_wave_file(ficheiro)

play_obj = wave_obj.play() # tocar o audio

play_obj.wait_done() # espera ate o audio terminar 

try :

	print( "Prima CTRL+C para terminar")

	while True: # ciclo para o programa executar sem parar…

		print( "Hello World!",r)
		winsound.PlaySound("SystemExit", winsound.SND_ALIAS)
		time.sleep (2)

except KeyboardInterrupt: # caso haja interrupção de teclado CTRL+C

	print( "Programa terminado pelo utilizador")

except : # caso haja um erro qualquer

	print( "Ocorreu um erro:", sys.exc_info() )

finally : # executa sempre, independentemente se ocorreu exception

	print( "Fim do programa") 