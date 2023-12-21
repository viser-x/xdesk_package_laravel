# XDesk v1.0.4

## Installation

Using npm:

```shell
composer require imrul18/x-desk
```

In Laravel :

```php
use .........
use XDesk\XDesk;

class TestController extends Controller
{
    public function test(){
        // <------ Rest code ------>
        $user = [
            'name' => "Afnan", //required
            'email' => 'test@gmail.com', //required
            'img' => "https://a.storyblok.com/f/191576/1200x800/215e59568f/round_profil_picture_after_.webp", //recommanded
            'age' => 21,
            ...
        ];
        $xdesk = new XDesk(
            'COMPANY_ID',
            'CLIENT_ID',
            'ADMIN_ID',
            'http://localhost:3000' // origin
            );

        $data = $xdesk->getURL($user, false); // true for admin Account & false for client account

        if ($data['status'] == 200) {
            return redirect($data['url']);
        } else {
            $message = $data['message'];
            return view('page', compact('message'));
        }
        // <------ Rest code ------>
    }
};
```

See the [www.XDesk.com](https:www.XDesk.com) for COMPANY_ID, CLIENT_ID & ADMIN_ID.
