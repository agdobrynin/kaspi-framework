CREATE TABLE IF NOT EXISTS $tableName (
  id INTEGER PRIMARY KEY AUTOINCREMENT,
  version BIGINT(20) NOT NULL UNIQUE,
  name VARCHAR(255),
  update_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

CREATE UNIQUE INDEX index_version ON $tableName (version);