## log de eventos em PHP

### error_log('Erro!', 0, 'file.log');

tipos de logs
- 0	- message is sent to PHP's system logger, using the Operating System's system logging mechanism or a file, depending on what the error_log configuration directive is set to. This is the default option.
- 1	- message is sent by email to the address in the destination parameter. This is the only message type where the fourth parameter, additional_headers is used.
- 2	- No longer an option.
- 3	- message is appended to the file destination. A newline is not automatically added to the end of the message string.
- 4	- message is sent directly to the SAPI logging handler.

