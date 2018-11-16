# Sec-Encryptietje
Security Exercises on OpenSSL, AES etc.

# Asymmetric Exercises

### Exercise 1: 4-tal functies in PHP die je kunt gebruikern voor asymmetrsiche encryptie.
- openssl_public_encrypt()
- openssl_private_encrypt
- openssl_public_decrypt()
- openssl_private_decrypt()

### Exercise 2: Wat is de maximale hoeveelheid bits en bytes dat RSA kan `encrypten `?
- Bits: 2048 bits
- Bytes: 256 bytes

### Exercise 3
##### Gebruik ik in IntelliJ een username / password combinatie voor je Github of gebruik je SSH keys?
- Ik maak gebruik van een username / password combinatie

##### Waarvoor gebruikt Github de keys als je met SSH inlogt?
- Om ervoor te zorgen dat de Repository gedecrypt wordt, zo kun je op een veiligere manier bestanden wijzigen/verwijderen/toevoegen

### Exercise 4
##### Wat moet er allemaal geregeld worden dat Bob ook berichten aan Alice kan sturen die versleuteld zijn?
- Bob moet de Session Key & Public key (PUB_KEY_ALICE) hebben om zijn bericht te encrypten, die Public key moet Alice ook hebben  

##### Wat moet er geregeld worden zodat ook Alice de berichten van Bob kan lezen?
- Alice moet de Private Key (PRIV_KEY_ALICE) & Public Key (PUB_KEY_ALICE) hebben om het bericht van Bob te decrypten
