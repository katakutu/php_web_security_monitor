<?
/**
*Main - P.W.S.M.
*Author Roman Shneer romanshneer@gmail.com
*1.02.2012
*Any changes at your risk and criminal responsibility
*/
eval(base64_decode('DQppbmNsdWRlX29uY2UoImxpYi9zdGFydC5pbmMucGhwIik7DQppbmNsdWRlX29uY2UoImxpYi9wc3MuaW5jLnBocCIpOw0KDQokc3RhcnQ9bmV3IFN0YXJ0Ow0KDQokc3RhcnQtPmNoa19pbnN0YWxsYXRpb25fbG9naW4oKTsNCg0KJHBzcz1uZXcgUFNTOw0KDQokY29udGVudHNbXT0kc3RhcnQtPmxldHRlcl9mcm9tX3Bhc3QoKTsNCg0KJGhlYWRlcnNbJ2hlYWRlciddPSAkcHNzLT5kcmF3X21lbnUoKTsNCiRoZWFkZXJzWydmb290ZXInXT0nPGF1dGhvcj5Db3BpcmlnaHQgMjAxMixQSFAgV2ViIFNlY3VyaXR5IE1vbml0b3IgICA8YSBocmVmPSJtYWlsdG86cm9tYW5zaG5lZXJAZ21haWwuY29tIj5BdXRob3I8L2E+Jm5ic3A7PGEgaHJlZj0iaHR0cDovL3JvbWFuc2huZWVyLmluZm8vcHdzbS9jb250YWN0cy5waHAiPkNvbnN0YWN0IFVzPC9hPjwvYXV0aG9yPic7DQppZighaXNzZXQoJF9HRVRbJ3EnXSkpJF9HRVRbJ3EnXT1udWxsOw0KDQpzd2l0Y2goJF9HRVRbJ3EnXSkNCnsNCmNhc2UgJ25ld19hZ2VudCc6DQokY29udGVudHNbXT0kcHNzLT53aXNhcmRfbmV3X2FnZW50KCk7DQokaGVhZGVyc1sndGl0bGUnXT0nUGF0Y2hpbmcgbmV3IG1vbml0b3JlZCBvYmplY3QnOw0KYnJlYWs7DQoNCmNhc2UgJ3ZpZXdfZmlsZSc6DQppZigkX0dFVFsnaWQnXSkNCgl7DQogIAkJJGNvbnRlbnRzW109JHBzcy0+dmlld19maWxlKCRfR0VUWydpZCddKTsNCiAgCQkkaGVhZGVyc1sndGl0bGUnXT0nVmlldyBGaWxlIFNvdXJjZTogJy4kcHNzLT5vYmplY3RfbmFtZTsNCgl9DQpicmVhazsNCmNhc2UgJ3VuaW5zdGFsbF9vYmplY3QnOg0KaWYoJF9HRVRbJ2lkJ10pDQoJew0KICAJCSRjb250ZW50c1tdPSRwc3MtPnVuaW5zdGFsbF9vYmplY3QoJF9HRVRbJ2lkJ10pOw0KICAJCSRoZWFkZXJzWyd0aXRsZSddPSdVbmluc3RhbGxpbmcgb2JqZWN0ICcuJHBzcy0+b2JqZWN0X25hbWU7DQoJfQ0KYnJlYWs7DQpjYXNlICdjb25maWcnOg0KJGNvbnRlbnRzW109JHBzcy0+dGJsX3RlbXBsYXRlc19saXN0KCk7DQokaGVhZGVyc1sndGl0bGUnXT0nU2VjdXJpdHkgRmlsdGVycyc7DQpicmVhazsNCmNhc2UgJ3Rlc3RfZm9ybSc6DQppZighaXNzZXQoJF9HRVRbJ2lkJ10pKSRfR0VUWydpZCddPTA7DQokY29udGVudHNbXT0kcHNzLT50ZXN0X2Zvcm0oJF9HRVRbJ2lkJ10pOw0KJGhlYWRlcnNbJ3RpdGxlJ109J1Rlc3QgRm9ybSBUb29sJzsNCmJyZWFrOw0KDQpjYXNlICd1c2Vycyc6DQokY29udGVudHNbXT0kcHNzLT51c2Vyc19mb3JtKCk7DQokaGVhZGVyc1sndGl0bGUnXT0nVXNlcnMgTWFuYWdtZW50JzsNCmJyZWFrOw0KY2FzZSAnYWJvdXQnOg0KJGNvbnRlbnRzW109JHBzcy0+YWJvdXRfcGFnZSgpOw0KJGhlYWRlcnNbJ3RpdGxlJ109J0Fib3V0IFAuVy5TLk0uJzsNCmJyZWFrOw0KY2FzZSAnZXhpdCc6DQp1bnNldCgkX1NFU1NJT05bJ3VzZXInXSk7DQpoZWFkZXIoIkxvY2F0aW9uOmxvZ2luLyIpOw0KZXhpdCgpOw0KYnJlYWs7DQpjYXNlICdhZ2VudHNfbGlzdCc6DQpkZWZhdWx0Og0KDQppZihpc3NldCgkX0dFVFsnaWQnXSkpDQoJew0KCQ0KCSRjb250ZW50c1tdPSRwc3MtPnJlcXVlc3Rfc3RhdGlzdGljcygkX0dFVFsnaWQnXSk7DQogIAkkaGVhZGVyc1sndGl0bGUnXT0nT2JqZWN0ICcuJHBzcy0+b2JqZWN0X25hbWUuJyBzdGF0aXN0aWNzJzsNCgkNCgl9ZWxzZWlmKGlzc2V0KCRfR0VUWyd0ZW1wbGF0ZV9pZCddKSkNCgl7DQoJDQoJJHRlbXBsYXRlPSRwc3MtPmdldF90ZW1wbGF0ZSgkX0dFVFsndGVtcGxhdGVfaWQnXSk7DQoJJGNvbnRlbnRzW109JHBzcy0+cmVxdWVzdF9zdGF0aXN0aWNzNHRlbXBsYXRlKCR0ZW1wbGF0ZSk7DQogIAkkaGVhZGVyc1sndGl0bGUnXT0nVGVtcGxhdGUgWycuJHRlbXBsYXRlWyduYW1lJ10uJ10gc3RhdGlzdGljcyc7DQogIAkNCgl9ZWxzZXsNCgkJJGhlYWRlcnNbJ3RpdGxlJ109J09iamVjdHMgbGlzdCc7DQoJCSRjb250ZW50c1tdPSRwc3MtPm9iamVjdHNfbGlzdCgpOw0KCX0NCmJyZWFrOw0KfQ0KJGhlYWRlcnNbJ2Rlc2NyaXB0aW9uJ109J1BIUCBXZWIgU2VjdXJpdHkgTW9uaXRvciBpcyBhIHNlY3VyaXR5IGZpbHRlciBvZiBSRVFVRVNUIFBIUCB2YXJpYWJsZXMgZm9yIHdlYm1hc3Rlcic7DQokaGVhZGVyc1sna2V5d29yZHMnXT0nUEhQLFNlY3VyaXR5JzsNCiBwcmludCAkc3RhcnQtPnRlbXBsYXRlX2h0bWwoJGhlYWRlcnMsJGNvbnRlbnRzKTs='));
?>