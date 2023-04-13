def send_file():
    url = 'http://127.0.0.1/ti/upload.php'                 # LINK PARA O UPLOAD.PHP
    files = {'imagem': open('webcam.jpg', 'rb')}                # VARIAVEL QUE VAI RECEBER APÓS A LEITURA (rb) OS BITS DA IMAGEM

    r = requests.post(url, files=files)                         # PEDIDO POST 
    
    if r.status_code==200:                                      #  |
        print("OK: POST realizado com sucesso")                 #  |
        print(r.status_code)                                    #  |
    else:                                                       #   ----> VERIFICAÇÃO SE O POST FOI FEITO
        print("ERRO: Não foi possível realizar o pedido")       #  |
        print(r.status_code)                                    #  |
 





try:

    import requests                             
    import cv2 as cv                            
    import sys                                                             
    import msvcrt
    X=True
    while X:
        camera = cv.VideoCapture(0, cv.CAP_DSHOW)    ## TIRA FOTO COM A CAMERA DO PC
        ret, imagem = camera.read()                  ## GUARDA A IMAGEM NA VARIAVEL (imagem) E O RET FICA COM VALOR BOLEANO
        print(ret)
        if bool(ret):
            cv.imwrite("webcam.jpg", imagem)         ## SE A IMAGEM TIVER SIDO TIRADO CRIA-SE O FICHEIRO WEBCAM.JPG
            send_file()                              ## VAI SE PARA A FUNÇÃO (SEND_FILE) PARA QUE SEJA ENVIADA A IMAGEM
        else:
            print("Não foi criada a imagem")
        cv.waitKey(5000)
        camera.release()
            

except : # caso haja um erro qualquer

    print( "Ocorreu um erro:", sys.exc_info() )


finally: # executa sempre, independentemente se ocorreu exception

    print( "Fim do programa")   
    cv.destroyAllWindows()   

