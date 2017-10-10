var ravenOptions = {
    ignoreErrors: [
        // ReferenceError
    ]
};

Raven.config('https://97a2c4614d14476fb46a1e40788c29f4@sentry.io/224812', ravenOptions).install();
