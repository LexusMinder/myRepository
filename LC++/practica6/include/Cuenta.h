
#include <string>
#ifndef CUENTA_H
#define CUENTA_H


class Cuenta
{
    public:
        Cuenta(int, std::string, float);
        virtual ~Cuenta();

        int getId();
        void setId(int val);
        std::string getTitular();
        void setTitular(std::string val);
        float getSaldo();
        void setSaldo(float val);
        void deposito(float monto);
        float retiro(float montoRetiro);

    protected:

    private:
        int id;
        std::string titular;
        float saldo;
};

#endif // CUENTA_H
