<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 34px;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            <div class="content">
                <div class="m-b-md">
                    <p>
                        Temper has just optimized the onboarding flow. After signing up for an
                        account, the user has to complete a series of forms to complete its
                        account.
                    </p>
                    <p>
                        The current steps in onboarding are: <br />
                        1. create account - 0% <br />
                        2. activate account - 20% <br />
                        3. provide profile information - 40% <br />
                        4. what jobs are you interested in? - 50% <br />
                        5. do you have relevant experience in these jobs? - 70% <br />
                        6. are you freelancer? - 90% <br />
                        7. waiting for approval - 99% <br />
                        8. approval - 100% <br />
                    </p>

                    <p>
                        Use the link below to view a chart of the percentage of users at each step of
                        the onboarding process
                    </p>
                </div>
                <div>
                    <a href="{{ route('generatedata') }}">View Chart</a>
                </div>
            </div>
        </div>
    </body>
</html>
