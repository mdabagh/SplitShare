# SplitShare
SplitShare is an open-source project designed to enable fair division of expenses among group members. It serves as a useful tool for managing shared costs in various scenarios, such as group meals or team outings. With SplitShare, individuals can easily calculate and distribute expenses among themselves, ensuring a fair and transparent process.

The main objective of SplitShare is to streamline the management of shared expenses and simplify the task of tracking individual contributions. It offers a user-friendly interface that allows users to input expenses, specify the participants involved, and automatically calculate each person's share. This eliminates the need for manual calculations and minimizes the potential for errors or misunderstandings.

Whether it's a casual gathering with friends or a more formal setting within a company, SplitShare provides a convenient solution for dividing costs and keeping everyone accountable. By facilitating fair and efficient expense sharing, SplitShare promotes transparency, eliminates financial burdens on a single individual, and enhances the overall experience of group activities.


## Database Structure

### Tables

#### `User` Table

- `id`: Unique identifier for each user.
- `name`: User's name.
- `email`: User's email.
- `google_id`: Unique identifier for the user from Google service (for Gmail login).

#### `Group` Table

- `id`: Unique identifier for each group.
- `name`: Group name.
- `creator_id`: Unique identifier for the user who created the group.
- `default_currency`: Default currency for the group.
- `default_calendar_type`: Default calendar type for the group (Shamsi or Gregorian).
- `invite_link`: Invitation link for joining the group.
- `invite_expiry`: Expiry date and time for the invitation link (one hour).

#### `GroupMember` Table

- `id`: Unique identifier for each group member.
- `group_id`: Unique identifier for the respective group.
- `user_id`: Unique identifier for the user associated with the group membership.

#### `Order` Table

- `id`: Unique identifier for each order.
- `title`: Order title.
- `description`: Order description.
- `group_id`: Unique identifier for the respective group.
- `creator_id`: Unique identifier for the user who created the order.
- `total_amount`: Total amount of the order.

#### `OrderMember` Table

- `id`: Unique identifier for each order member.
- `order_id`: Unique identifier for the respective order.
- `user_id`: Unique identifier for the respective user.
- `amount`: Amount owed by the user for the order.
- `settled_amount`: Amount settled by the user for the order.

#### `Transaction` Table

- `id`: Unique identifier for each transaction.
- `payer_id`: Unique identifier for the user who made the payment.
- `receiver_id`: Unique identifier for the user who received the payment.
- `amount`: Amount of the transaction.
- `order_member_id`: Unique identifier for the respective order member.
- `paid_at`: Date and time of the payment.
