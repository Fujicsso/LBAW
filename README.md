# Online Shop 2020

## Project

The objective of this project is to develop a web application for an online smartphone store, named uPhone.

### Team

- Eduardo Ferreira Campos
- Miguel Rodrigues Gomes
- João Paulo Ribeiro Nunes
- João Pedro da Costa Ribeiro

### Artefacts

- User Requirements specification
  - [A1: Project presentation](https://git.fe.up.pt/lbaw/lbaw1920/lbaw2065/-/wikis/a1)
  - [A2: Actors and User stories](https://git.fe.up.pt/lbaw/lbaw1920/lbaw2065/-/wikis/a2)
  - [A3: User Interfaces Prototype](https://git.fe.up.pt/lbaw/lbaw1920/lbaw2065/-/wikis/a3)
- Database specification
  - [A4: Conceptual Data Model](https://git.fe.up.pt/lbaw/lbaw1920/lbaw2065/-/wikis/a4)
  - [A5: Relational schema, validation and schema refinement](https://git.fe.up.pt/lbaw/lbaw1920/lbaw2065/-/wikis/a5)
  - [A6: Integrity constraints. Indexes, triggers, user functions, transactions, database populated with data](https://git.fe.up.pt/lbaw/lbaw1920/lbaw2065/-/wikis/a6)
- Architecture specification and Prototype
  - [A7: High-level architecture. Privileges. Web resources specification](https://git.fe.up.pt/lbaw/lbaw1920/lbaw2065/-/wikis/a7)
  - [A8: Vertical Prototype](https://git.fe.up.pt/lbaw/lbaw1920/lbaw2065/-/wikis/a8)
- Product and Presentation
  - [A9: Product](https://git.fe.up.pt/lbaw/lbaw1920/lbaw2065/-/wikis/a9)
  - [A10: Presentation and discussion](a10)

### URL para o produto final: http://lbaw2065.lbaw-prod.fe.up.pt

### Credentials

#### Admin

| Email         | Password |
| ------------- | -------- |
| mail@mail.com | 1234     |

#### User

| Type    | Email                 | Password |
| ------- | --------------------- | -------- |
| conta 1 | jdymott1@examiner.com | 123456   |
| conta 2 | ajerg2@bloglovin.com  | 123456   |

### Docker Command

```
docker-compose up

docker run -it -p 8000:80 -e DB_DATABASE="lbaw2065" -e DB_USERNAME="lbaw2065" -e DB_PASSWORD="FE538806" lbaw2065/lbaw2065
```

---

GROUP2065, 03/06/2020
