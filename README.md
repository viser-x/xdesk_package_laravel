# XDesk v1.0.4

## Installation

Using npm:

```shell
composer require imrul18/x-desk
```

In Laravel :

```js
import React, { useState } from "react";
import XDesk from "xdesk";

const App = () => {
    const user = {
        name: "Imrul Afnan",
        email: "test@example.com",
        img: "https://a.storyblok.com/f/191576/1200x800/215e59568f/round_profil_picture_after_.webp",
        phone: "016XXX-XXXXX"
        .............
    }
    const [loading, setLoading] = useState(false)
  return (
    <div>
        <------ Rest code ------>
        <XDesk
            name={user.name}
            email={user.email}
            details={user}
            isAdmin={false} // true for admin Account & false for client account
            companyId="COMPANY_ID"
            clientId="CLIENT_ID"
            adminId="ADMIN_ID"
            setLoader={ status => setLoading(status)}
          >
            <div className="btn btn-danger">{loading ? "Please Wait" : "Open Ticket"}</div>
        </XDesk>
        <------ Rest code ------>
    </div>
  );
};
```

See the [www.XDesk.com](https:www.XDesk.com) for COMPANY_ID, CLIENT_ID & ADMIN_ID.
