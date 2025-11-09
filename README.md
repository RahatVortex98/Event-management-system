# Event Management API

A RESTful **Event Management System** built with **Laravel 12** and **MySQL**, allowing users to create events, manage attendees, and receive notifications. The project uses **Laravel Sanctum** for API authentication.

---

## Features

- **Event Management**
  - Create, read, update, and delete events.
  - Events are associated with a user (event owner).
- **Attendee Management**
  - Register attendees for events.
  - List attendees for a specific event.
- **Authentication**
  - User login via API using **Laravel Sanctum**.
  - Token-based authentication for secure API access.
- **Notifications**
  - Remind attendees about upcoming events via email.
- **Authorization**
  - Gates to restrict users from modifying events they don’t own.

---

## Technologies Used

- **Backend:** Laravel 12, PHP 8.2  
- **Database:** MySQL / PostgreSQL  
- **Authentication:** Laravel Sanctum (API tokens)  
- **Notifications:** Laravel Notification system (Mail)  
- **API Resource Responses:** Laravel API Resources  

---



## API Endpoints:

| Method | Endpoint  | Description               |
| ------ | --------- | ------------------------- |
| POST   | `/login`  | Login and get API token   |
| POST   | `/logout` | Logout (token revocation) |

Events:
| Method | Endpoint       | Description                        |
| ------ | -------------- | ---------------------------------- |
| GET    | `/events`      | List all events                    |
| POST   | `/events`      | Create a new event (auth required) |
| GET    | `/events/{id}` | Get event details                  |
| PUT    | `/events/{id}` | Update an event (auth required)    |
| DELETE | `/events/{id}` | Delete an event (auth required)    |

Attendees:

| Method | Endpoint                 | Description                          |
| ------ | ------------------------ | ------------------------------------ |
| GET    | `/events/{id}/attendees` | List attendees for an event          |
| POST   | `/events/{id}/attendees` | Register an attendee (auth required) |


Screenshots:

Create Event:

<img width="931" height="626" alt="create_event" src="https://github.com/user-attachments/assets/cba9c2e2-b3a6-455f-af2d-e00c5c760324" />

Update Event:

<img width="933" height="620" alt="update_event" src="https://github.com/user-attachments/assets/9349d455-581a-4a89-8b52-4ea3d2da6aaf" />

Delete Event:

<img width="926" height="618" alt="delete_event" src="https://github.com/user-attachments/assets/3ba46eca-707b-4c9b-b768-5810075aa855" />

Single Attendee:

<img width="938" height="617" alt="single_attendee" src="https://github.com/user-attachments/assets/83e8ffec-7e77-4c3a-bbbc-c9e5e42ce030" />

Event id of Attendee:

<img width="940" height="621" alt="Event_event_id_attendee" src="https://github.com/user-attachments/assets/c6826803-9e8c-49c3-8302-ad7a0fbe7a0a" />

Delete Attendee:

<img width="934" height="623" alt="delete_attendee" src="https://github.com/user-attachments/assets/02b79872-7a63-4e36-8ccc-ee1512ac9cf7" />

Create Attendee:

<img width="935" height="616" alt="create_attendee" src="https://github.com/user-attachments/assets/d9938c39-4fa9-4c39-89ec-ab8b51707d6f" />

Login:

<img width="936" height="620" alt="Login" src="https://github.com/user-attachments/assets/afcccefe-1b53-40e7-8504-0f5a9a5ff4eb" />

Logout:

<img width="932" height="621" alt="logout" src="https://github.com/user-attachments/assets/ca7f45bb-a76c-4836-bf61-bab4a085d7c4" />

After Authorization:

<img width="935" height="611" alt="after_authorization" src="https://github.com/user-attachments/assets/c99de77a-e7ea-4c46-80b9-0dcdfc351bee" />

Token Authorization:

<img width="925" height="572" alt="token_authorization" src="https://github.com/user-attachments/assets/f3769f9b-bd6f-4350-a858-6869bbde029a" />

Using Gates:

<img width="936" height="471" alt="useing_Gates" src="https://github.com/user-attachments/assets/9f6f3341-ed14-4fc1-8ead-ded7e0fd7081" />

Gates On attendee:

<img width="939" height="659" alt="Gates_attendee" src="https://github.com/user-attachments/assets/0343575f-6ef8-4303-8e21-e7c889e46ea1" />

Event Reminder:
<img width="573" height="52" alt="event_reminder" src="https://github.com/user-attachments/assets/1a918ce0-00ed-4894-9638-94d1346f12a5" />
---
