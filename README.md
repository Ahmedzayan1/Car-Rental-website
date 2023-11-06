# Car-Rental-website

![Screenshot 2023-11-06 150404](https://github.com/Ahmedzayan1/Car-Rental-website/assets/87100830/afd22c0d-432b-4203-be57-a3f036a2729e)

Welcome to the Car Rental Website project! This system is designed to provide a realistic and functional car rental experience. It includes features for both administrators and customers, along with various security measures and efficient query functionality.

## Goals

Design a car rental system that’s realistic and can be used. 

## Validations

- Customers must be over 18 years.
- Customers must enter a valid national ID and license number.
- Password must be at least 8 characters.
- No more than one account can be created for the same person (national ID, license number, and email must be unique).
- Rent dates must be valid (Customers can't rent a car on previous dates).

## Features

### Admin

- View all daily payments (or choose a specific range of dates).
- View all customer information (except for the password).
- Insert a new office.
- View all offices.
- Insert a new car to a specific office.
- Update a car if it's out of service.
- View all cars.
- View reservations:
  - Can search by any of the customer’s information (name, email, national ID, etc.).
  - Can search by any of the car’s information (type, model, year, etc.).
  - Can search by reservation information (start date, end date, payment done or not).
![Screenshot 2023-11-06 151156](https://github.com/Ahmedzayan1/Car-Rental-website/assets/87100830/138a7a33-ee35-4f13-832c-a9030d7d0e44)

### Customer
![Screenshot 2023-11-06 150423](https://github.com/Ahmedzayan1/Car-Rental-website/assets/87100830/8d73004b-beae-4cf4-84bb-aca9d3cfd1c3)

- First, the customer should register and then log in.
- They will be directed to the home page where they can search for any car according to their needs.
- They must enter the following:
  - Start and end date of reservation.
  - Country.
- They’ll also have the following as optional:
  - Min, max price.
  - Car’s type, model, model year.
- After renting a car, they can go to the payment page having 2 options:
  - Rent.
  - Cancel reservation.
- Finally, a customer can view all of their reservations.
![Screenshot 2023-11-06 150519](https://github.com/Ahmedzayan1/Car-Rental-website/assets/87100830/f2e1e4f4-5b7b-42d9-b65d-741528e208f2)

## Security

No one can access or see the admin section except the admin when he enters his email and password in the login.

## Queries

All queries are designed efficiently to get all the correct data for admin or customers and are dynamic for the advanced search the system provides. In other words, there’s only one query to retrieve the data works for entering (car’s specs, customer’s information, etc.) or leaving these boxes empty.



## Contributing

If you'd like to contribute to the development of the Car Rental Website, please follow these steps:
1. Fork the repository.
2. Create a new branch: `git checkout -b feature/new-feature`.
3. Make your changes and commit them: `git commit -m 'Add new feature'`.
4. Push to the branch: `git push origin feature/new-feature`.
5. Submit a pull request.

## License

This project is licensed under the [MIT License](LICENSE), allowing you to use, modify, and distribute the code freely.

---

Thank you for your interest in the Car Rental Website project! If you have any questions or suggestions, feel free to open an issue or reach out to the project contributors.

Happy renting! 🚗
