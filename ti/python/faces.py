import sys
import cv2 as cv
import time
import face_detection as fd
import msvcrt

try:
    while True:
        print("\n\n***NOVA CAPTURA DE IMAGEM *** : )")
        print("\nPrima Q na janela grafica para capturar a face")
        print("Prima CTRL+C na linha de comando para terminar o programa")
        
                                                                  ## função que está true se estiver a espera de uma tecla ser carregada
        valor_teclado=msvcrt.getch()                                        ## função que fica em string com a tecla pressionada 
        print(valor_teclado)
        if valor_teclado == b"Q" or valor_teclado == b"q":
            print("potor")
            imagem = fd.crop_faces()
        else:
            print()

        print("A gravar a imagem faces.jpg")
        cv.imwrite("face.jpg", imagem)
        print("A aguardar 5 segundos até nova captura ou CTRL+C para terminar")
        time.sleep(5)
        
except: # caso haja um erro qualquer
    print( "Ocorreu um erro:", sys.exc_info() )


finally: # executa sempre, independentemente se ocorreu exception
    print( "Fim do programa")
    cv.destroyAllWindows()             