


import cv2 as cv


try :

	print( "Prima CTRL+C para terminar")
	camera = cv2.VideoCapture(0)
	ret, image = camera.read()
	print ("Resultado da Camera=" + str(ret))
	cv2.imwrite('webcam.jpg', image)
	camera.release()	
	cv2.destroyAllWindows()
	

except KeyboardInterrupt: # caso haja interrupção de teclado CTRL+C

	print( "Programa terminado pelo utilizador")

except : # caso haja um erro qualquer

	print( "Ocorreu um erro:", sys.exc_info() )

finally : # executa sempre, independentemente se ocorreu exception

	print( "Fim do programa") 