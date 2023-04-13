

import cv2
camera = cv2.VideoCapture(0, cv2.CAP_DSHOW)    ## TIRA FOTO COM A CAMERA DO PC
ret, image = camera.read()
print ("Resultado da Camera=" + str(ret))      ## VERIFICA SE A FOTO FOI TIRADA
cv2.imwrite('opencv_image.png', image)         ## CRIA O FICHEIRO COM A FOTO
camera.release()
cv2.destroyAllWindows()                        ## DESTRÓI TODAS AS VARIAVEIS


