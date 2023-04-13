
def datahora():

    X=strftime("%Y/%m/%d %H:%M:%S")    ## FUNÇÃO QUE PERMITE DAR A HORA DO PC

    return X
    
def send_to_api(nome_atuador,data_atuador,valor_atuador):  ## FUNÇÃO QUE PERMITE MANDAR PELO METODO POST OS VALORES DE UM SENSOR
    r=requests.post("http://127.0.0.1/ti/api/api.php", data={'nome': nome_atuador , 'valor': valor_atuador, 'hora': data_atuador})  
                                                                                                                                         
    if r.status_code==200:                                                                                                  
        print("OK: POST realizado com sucesso")
        print(r.status_code)
    else:
        print("ERRO: Não foi possível realizar o pedido")
        print(r.status_code)
try:
    import sys
    import requests
    from time import strftime, gmtime
    import msvcrt
    #from msvcrt import kbhit, getch

    print("Usage:\n[0]Desligar a luz da rua\n[1]Ligar a luz da rua\n[CTRL+C]Terminar")

    nome_atuador="luzdarua"

    while True:

        if msvcrt.kbhit():    ## FUNÇÃO QUE ESTÁ TRUE SE ESTIVER A ESPERA DE UMA TECLA SER PRESIONADA
            valor_atuador=msvcrt.getch()  ## FUNÇÃO QUE FICA EM STRING COM A TECLA PRESSIONA (SE NÃO SOUBER QUAL TECLA ELE FAZ /X00)
            print(valor_atuador)
            if int(valor_atuador) == 0:
                A=datahora()
                send_to_api(nome_atuador,A,valor_atuador)
                print("\nLuz foi desligada")

            elif int(valor_atuador) == 1:
                A=datahora()
                send_to_api(nome_atuador,A,valor_atuador)
                print("\nLuz foi ligada")
            else:
                print("\nOpção inválida")    

except : # caso haja um erro qualquer
    print( "Ocorreu um erro:", sys.exc_info() )

finally : # executa sempre, independentemente se ocorreu exception
    print( "Fim do programa")    