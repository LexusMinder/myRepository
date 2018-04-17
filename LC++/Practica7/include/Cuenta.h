
#include <string>
#ifndef CUENTA_H
#define CUENTA_H
#include "Cliente.h"


class Cuenta
{
    public:
        Cuenta(int, Cliente, float);
        virtual ~Cuenta();
        int getId();
        void setId(int val);
        Cliente getTitular();
        void setTitular(Cliente val);
        float getSaldo();
        void setSaldo(float val);
        void deposito(float monto);
        float retiro(float montoRetiro);
        void verInformacion();

    protected:

    private:
        int id;
        Cliente titular;
        float saldo;
};

#endif // CUENTA_H
