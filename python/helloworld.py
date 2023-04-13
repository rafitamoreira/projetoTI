import sys
import time

try :

	print( "Prima CTRL+C para terminar")

	while True: # ciclo para o programa executar sem parar…

		print( "Hello World!")
		time.sleep (2)

except KeyboardInterrupt: # caso haja interrupção de teclado CTRL+C

	print( "Programa terminado pelo utilizador")

except : # caso haja um erro qualquer

	print( "Ocorreu um erro:", sys.exc_info() )

finally : # executa sempre, independentemente se ocorreu exception

	print( "Fim do programa") 