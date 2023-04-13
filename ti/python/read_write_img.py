try:
    import cv2 as cv
    import sys 
    import msvcrt
    img = cv.imread("opencv_image.png", 0) # mete a img em preto e branco
    X=True
    while X:
        print("Clique no S para tirar uma foto")
        V_s=msvcrt.getch()  
        if V_s == b"S" or V_s == b"s" :
            cv.imwrite("opencv_image_gray.png", img) # cria uma nova foto
            X=False
        else:
             print()  

    cv.waitKey(5000) # pausa 5s
            
   

except : # caso haja um erro qualquer

    print( "Ocorreu um erro:", sys.exc_info() )

finally : # final do programa

    print( "Fim do programa")    
    cv.destroyAllWindows()  # elemina as vars