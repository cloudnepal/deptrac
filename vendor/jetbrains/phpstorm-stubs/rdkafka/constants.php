<?php

namespace DEPTRAC_INTERNAL;

\define('RD_KAFKA_RESP_ERR__BEGIN', -200);
\define('RD_KAFKA_RESP_ERR__BAD_MSG', -199);
\define('RD_KAFKA_RESP_ERR__BAD_COMPRESSION', -198);
\define('RD_KAFKA_RESP_ERR__DESTROY', -197);
\define('RD_KAFKA_RESP_ERR__FAIL', -196);
\define('RD_KAFKA_RESP_ERR__TRANSPORT', -195);
\define('RD_KAFKA_RESP_ERR__CRIT_SYS_RESOURCE', -194);
\define('RD_KAFKA_RESP_ERR__RESOLVE', -193);
\define('RD_KAFKA_RESP_ERR__MSG_TIMED_OUT', -192);
\define('RD_KAFKA_RESP_ERR__PARTITION_EOF', -191);
\define('RD_KAFKA_RESP_ERR__UNKNOWN_PARTITION', -190);
\define('RD_KAFKA_RESP_ERR__FS', -189);
\define('RD_KAFKA_RESP_ERR__UNKNOWN_TOPIC', -188);
\define('RD_KAFKA_RESP_ERR__ALL_BROKERS_DOWN', -187);
\define('RD_KAFKA_RESP_ERR__INVALID_ARG', -186);
\define('RD_KAFKA_RESP_ERR__TIMED_OUT', -185);
\define('RD_KAFKA_RESP_ERR__QUEUE_FULL', -184);
\define('RD_KAFKA_RESP_ERR__ISR_INSUFF', -183);
\define('RD_KAFKA_RESP_ERR__NODE_UPDATE', -182);
\define('RD_KAFKA_RESP_ERR__SSL', -181);
\define('RD_KAFKA_RESP_ERR__WAIT_COORD', -180);
\define('RD_KAFKA_RESP_ERR__UNKNOWN_GROUP', -179);
\define('RD_KAFKA_RESP_ERR__IN_PROGRESS', -178);
\define('RD_KAFKA_RESP_ERR__PREV_IN_PROGRESS', -177);
\define('RD_KAFKA_RESP_ERR__EXISTING_SUBSCRIPTION', -176);
\define('RD_KAFKA_RESP_ERR__ASSIGN_PARTITIONS', -175);
\define('RD_KAFKA_RESP_ERR__REVOKE_PARTITIONS', -174);
\define('RD_KAFKA_RESP_ERR__CONFLICT', -173);
\define('RD_KAFKA_RESP_ERR__STATE', -172);
\define('RD_KAFKA_RESP_ERR__UNKNOWN_PROTOCOL', -171);
\define('RD_KAFKA_RESP_ERR__NOT_IMPLEMENTED', -170);
\define('RD_KAFKA_RESP_ERR__AUTHENTICATION', -169);
\define('RD_KAFKA_RESP_ERR__NO_OFFSET', -168);
\define('RD_KAFKA_RESP_ERR__OUTDATED', -167);
\define('RD_KAFKA_RESP_ERR__TIMED_OUT_QUEUE', -166);
\define('RD_KAFKA_RESP_ERR__UNSUPPORTED_FEATURE', -165);
\define('RD_KAFKA_RESP_ERR__WAIT_CACHE', -164);
\define('RD_KAFKA_RESP_ERR__INTR', -163);
\define('RD_KAFKA_RESP_ERR__KEY_SERIALIZATION', -162);
\define('RD_KAFKA_RESP_ERR__VALUE_SERIALIZATION', -161);
\define('RD_KAFKA_RESP_ERR__KEY_DESERIALIZATION', -160);
\define('RD_KAFKA_RESP_ERR__VALUE_DESERIALIZATION', -159);
\define('RD_KAFKA_RESP_ERR__PARTIAL', -158);
\define('RD_KAFKA_RESP_ERR__END', -100);
\define('RD_KAFKA_RESP_ERR_UNKNOWN', -1);
\define('RD_KAFKA_RESP_ERR_NO_ERROR', 0);
\define('RD_KAFKA_RESP_ERR_OFFSET_OUT_OF_RANGE', 1);
\define('RD_KAFKA_RESP_ERR_INVALID_MSG', 2);
\define('RD_KAFKA_RESP_ERR_UNKNOWN_TOPIC_OR_PART', 3);
\define('RD_KAFKA_RESP_ERR_INVALID_MSG_SIZE', 4);
\define('RD_KAFKA_RESP_ERR_LEADER_NOT_AVAILABLE', 5);
\define('RD_KAFKA_RESP_ERR_NOT_LEADER_FOR_PARTITION', 6);
\define('RD_KAFKA_RESP_ERR_REQUEST_TIMED_OUT', 7);
\define('RD_KAFKA_RESP_ERR_BROKER_NOT_AVAILABLE', 8);
\define('RD_KAFKA_RESP_ERR_REPLICA_NOT_AVAILABLE', 9);
\define('RD_KAFKA_RESP_ERR_MSG_SIZE_TOO_LARGE', 10);
\define('RD_KAFKA_RESP_ERR_STALE_CTRL_EPOCH', 11);
\define('RD_KAFKA_RESP_ERR_OFFSET_METADATA_TOO_LARGE', 12);
\define('RD_KAFKA_RESP_ERR_NETWORK_EXCEPTION', 13);
\define('RD_KAFKA_RESP_ERR_GROUP_LOAD_IN_PROGRESS', 14);
\define('RD_KAFKA_RESP_ERR_GROUP_COORDINATOR_NOT_AVAILABLE', 15);
\define('RD_KAFKA_RESP_ERR_NOT_COORDINATOR_FOR_GROUP', 16);
\define('RD_KAFKA_RESP_ERR_TOPIC_EXCEPTION', 17);
\define('RD_KAFKA_RESP_ERR_RECORD_LIST_TOO_LARGE', 18);
\define('RD_KAFKA_RESP_ERR_NOT_ENOUGH_REPLICAS', 19);
\define('RD_KAFKA_RESP_ERR_NOT_ENOUGH_REPLICAS_AFTER_APPEND', 20);
\define('RD_KAFKA_RESP_ERR_INVALID_REQUIRED_ACKS', 21);
\define('RD_KAFKA_RESP_ERR_ILLEGAL_GENERATION', 22);
\define('RD_KAFKA_RESP_ERR_INCONSISTENT_GROUP_PROTOCOL', 23);
\define('RD_KAFKA_RESP_ERR_INVALID_GROUP_ID', 24);
\define('RD_KAFKA_RESP_ERR_UNKNOWN_MEMBER_ID', 25);
\define('RD_KAFKA_RESP_ERR_INVALID_SESSION_TIMEOUT', 26);
\define('RD_KAFKA_RESP_ERR_REBALANCE_IN_PROGRESS', 27);
\define('RD_KAFKA_RESP_ERR_INVALID_COMMIT_OFFSET_SIZE', 28);
\define('RD_KAFKA_RESP_ERR_TOPIC_AUTHORIZATION_FAILED', 29);
\define('RD_KAFKA_RESP_ERR_GROUP_AUTHORIZATION_FAILED', 30);
\define('RD_KAFKA_RESP_ERR_CLUSTER_AUTHORIZATION_FAILED', 31);
\define('RD_KAFKA_RESP_ERR_INVALID_TIMESTAMP', 32);
\define('RD_KAFKA_RESP_ERR_UNSUPPORTED_SASL_MECHANISM', 33);
\define('RD_KAFKA_RESP_ERR_ILLEGAL_SASL_STATE', 34);
\define('RD_KAFKA_RESP_ERR_UNSUPPORTED_VERSION', 35);
\define('RD_KAFKA_RESP_ERR_TOPIC_ALREADY_EXISTS', 36);
\define('RD_KAFKA_RESP_ERR_INVALID_PARTITIONS', 37);
\define('RD_KAFKA_RESP_ERR_INVALID_REPLICATION_FACTOR', 38);
\define('RD_KAFKA_RESP_ERR_INVALID_REPLICA_ASSIGNMENT', 39);
\define('RD_KAFKA_RESP_ERR_INVALID_CONFIG', 40);
\define('RD_KAFKA_RESP_ERR_NOT_CONTROLLER', 41);
\define('RD_KAFKA_RESP_ERR_INVALID_REQUEST', 42);
\define('RD_KAFKA_RESP_ERR_UNSUPPORTED_FOR_MESSAGE_FORMAT', 43);
\define('RD_KAFKA_RESP_ERR_POLICY_VIOLATION', 44);
\define('RD_KAFKA_RESP_ERR_OUT_OF_ORDER_SEQUENCE_NUMBER', 45);
\define('RD_KAFKA_RESP_ERR_DUPLICATE_SEQUENCE_NUMBER', 46);
\define('RD_KAFKA_RESP_ERR_INVALID_PRODUCER_EPOCH', 47);
\define('RD_KAFKA_RESP_ERR_INVALID_TXN_STATE', 48);
\define('RD_KAFKA_RESP_ERR_INVALID_PRODUCER_ID_MAPPING', 49);
\define('RD_KAFKA_RESP_ERR_INVALID_TRANSACTION_TIMEOUT', 50);
\define('RD_KAFKA_RESP_ERR_CONCURRENT_TRANSACTIONS', 51);
\define('RD_KAFKA_RESP_ERR_TRANSACTION_COORDINATOR_FENCED', 52);
\define('RD_KAFKA_RESP_ERR_TRANSACTIONAL_ID_AUTHORIZATION_FAILED', 53);
\define('RD_KAFKA_RESP_ERR_SECURITY_DISABLED', 54);
\define('RD_KAFKA_RESP_ERR_OPERATION_NOT_ATTEMPTED', 55);
\define('RD_KAFKA_RESP_ERR_COORDINATOR_LOAD_IN_PROGRESS', 14);
\define('RD_KAFKA_RESP_ERR_COORDINATOR_NOT_AVAILABLE', 15);
\define('RD_KAFKA_RESP_ERR_NOT_COORDINATOR', 16);
\define('RD_KAFKA_RESP_ERR_KAFKA_STORAGE_ERROR', 56);
\define('RD_KAFKA_RESP_ERR_LOG_DIR_NOT_FOUND', 57);
\define('RD_KAFKA_RESP_ERR_SASL_AUTHENTICATION_FAILED', 58);
\define('RD_KAFKA_RESP_ERR_UNKNOWN_PRODUCER_ID', 59);
\define('RD_KAFKA_RESP_ERR_REASSIGNMENT_IN_PROGRESS', 60);
\define('RD_KAFKA_RESP_ERR_DELEGATION_TOKEN_AUTH_DISABLED', 61);
\define('RD_KAFKA_RESP_ERR_DELEGATION_TOKEN_NOT_FOUND', 62);
\define('RD_KAFKA_RESP_ERR_DELEGATION_TOKEN_OWNER_MISMATCH', 63);
\define('RD_KAFKA_RESP_ERR_DELEGATION_TOKEN_REQUEST_NOT_ALLOWED', 64);
\define('RD_KAFKA_RESP_ERR_DELEGATION_TOKEN_AUTHORIZATION_FAILED', 65);
\define('RD_KAFKA_RESP_ERR_DELEGATION_TOKEN_EXPIRED', 66);
\define('RD_KAFKA_RESP_ERR_INVALID_PRINCIPAL_TYPE', 67);
\define('RD_KAFKA_RESP_ERR_NON_EMPTY_GROUP', 68);
\define('RD_KAFKA_RESP_ERR_GROUP_ID_NOT_FOUND', 69);
\define('RD_KAFKA_RESP_ERR_FETCH_SESSION_ID_NOT_FOUND', 70);
\define('RD_KAFKA_RESP_ERR_INVALID_FETCH_SESSION_EPOCH', 71);
\define('RD_KAFKA_RESP_ERR_LISTENER_NOT_FOUND', 72);
\define('RD_KAFKA_RESP_ERR_TOPIC_DELETION_DISABLED', 73);
\define('RD_KAFKA_RESP_ERR_FENCED_LEADER_EPOCH', 74);
\define('RD_KAFKA_RESP_ERR_UNKNOWN_LEADER_EPOCH', 75);
\define('RD_KAFKA_RESP_ERR_UNSUPPORTED_COMPRESSION_TYPE', 76);
\define('RD_KAFKA_RESP_ERR_STALE_BROKER_EPOCH', 77);
\define('RD_KAFKA_RESP_ERR_OFFSET_NOT_AVAILABLE', 78);
\define('RD_KAFKA_RESP_ERR_MEMBER_ID_REQUIRED', 79);
\define('RD_KAFKA_RESP_ERR_PREFERRED_LEADER_NOT_AVAILABLE', 80);
\define('RD_KAFKA_RESP_ERR_GROUP_MAX_SIZE_REACHED', 81);
\define('RD_KAFKA_RESP_ERR_FENCED_INSTANCE_ID', 82);
\define('RD_KAFKA_RESP_ERR_ELIGIBLE_LEADERS_NOT_AVAILABLE', 83);
\define('RD_KAFKA_RESP_ERR_ELECTION_NOT_NEEDED', 84);
\define('RD_KAFKA_RESP_ERR_NO_REASSIGNMENT_IN_PROGRESS', 85);
\define('RD_KAFKA_RESP_ERR_GROUP_SUBSCRIBED_TO_TOPIC', 86);
\define('RD_KAFKA_RESP_ERR_INVALID_RECORD', 87);
\define('RD_KAFKA_RESP_ERR_UNSTABLE_OFFSET_COMMIT', 88);
\define('RD_KAFKA_RESP_ERR__READ_ONLY', -157);
\define('RD_KAFKA_RESP_ERR__NOENT', -156);
\define('RD_KAFKA_RESP_ERR__UNDERFLOW', -155);
\define('RD_KAFKA_RESP_ERR__INVALID_TYPE', -154);
\define('RD_KAFKA_RESP_ERR__RETRY', -153);
\define('RD_KAFKA_RESP_ERR__PURGE_QUEUE', -152);
\define('RD_KAFKA_RESP_ERR__PURGE_INFLIGHT', -151);
\define('RD_KAFKA_RESP_ERR__FATAL', -150);
\define('RD_KAFKA_RESP_ERR__INCONSISTENT', -149);
\define('RD_KAFKA_RESP_ERR__GAPLESS_GUARANTEE', -148);
\define('RD_KAFKA_RESP_ERR__MAX_POLL_EXCEEDED', -147);
\define('RD_KAFKA_RESP_ERR__UNKNOWN_BROKER', -146);
\define('RD_KAFKA_RESP_ERR__NOT_CONFIGURED', -145);
\define('RD_KAFKA_RESP_ERR__FENCED', -144);
\define('RD_KAFKA_RESP_ERR__APPLICATION', -143);
\define('RD_KAFKA_RESP_ERR__ASSIGNMENT_LOST', -142);
\define('RD_KAFKA_RESP_ERR__NOOP', -141);
\define('RD_KAFKA_RESP_ERR__AUTO_OFFSET_RESET', -140);
\define('RD_KAFKA_RESP_ERR_THROTTLING_QUOTA_EXCEEDED', 89);
\define('RD_KAFKA_RESP_ERR_PRODUCER_FENCED', 90);
\define('RD_KAFKA_RESP_ERR_RESOURCE_NOT_FOUND', 91);
\define('RD_KAFKA_RESP_ERR_DUPLICATE_RESOURCE', 92);
\define('RD_KAFKA_RESP_ERR_UNACCEPTABLE_CREDENTIAL', 93);
\define('RD_KAFKA_RESP_ERR_INCONSISTENT_VOTER_SET', 94);
\define('RD_KAFKA_RESP_ERR_INVALID_UPDATE_VERSION', 95);
\define('RD_KAFKA_RESP_ERR_FEATURE_UPDATE_FAILED', 96);
\define('RD_KAFKA_RESP_ERR_PRINCIPAL_DESERIALIZATION_FAILURE', 97);
\define('RD_KAFKA_CONSUMER', 1);
\define('RD_KAFKA_OFFSET_BEGINNING', -2);
\define('RD_KAFKA_OFFSET_END', -1);
\define('RD_KAFKA_OFFSET_STORED', -1000);
\define('RD_KAFKA_OFFSET_INVALID', -1001);
\define('RD_KAFKA_PARTITION_UA', -1);
\define('RD_KAFKA_PRODUCER', 0);
\define('RD_KAFKA_VERSION', 17236223);
\define('RD_KAFKA_BUILD_VERSION', 17236223);
\define('RD_KAFKA_CONF_UNKNOWN', -2);
\define('RD_KAFKA_CONF_INVALID', -1);
\define('RD_KAFKA_CONF_OK', 0);
\define('RD_KAFKA_MSG_PARTITIONER_RANDOM', 2);
\define('RD_KAFKA_MSG_PARTITIONER_CONSISTENT', 3);
\define('RD_KAFKA_MSG_PARTITIONER_CONSISTENT_RANDOM', 4);
\define('RD_KAFKA_MSG_PARTITIONER_MURMUR2', 5);
\define('RD_KAFKA_MSG_PARTITIONER_MURMUR2_RANDOM', 6);
\define('RD_KAFKA_MSG_F_BLOCK', 4);
\define('RD_KAFKA_LOG_PRINT', 100);
\define('RD_KAFKA_LOG_SYSLOG', 101);
\define('RD_KAFKA_LOG_SYSLOG_PRINT', 102);
\define('RD_KAFKA_PURGE_F_QUEUE', 1);
\define('RD_KAFKA_PURGE_F_INFLIGHT', 2);
\define('RD_KAFKA_PURGE_F_NON_BLOCKING', 4);
