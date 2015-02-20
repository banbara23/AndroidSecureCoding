/*
 * Copyright (C) 2012-2014 Japan Smartphone Security Association
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 *      http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

package org.jssec.android.service.inhouseservice.messengeruser;

public class CommonValue {
    /**
     * クライアントとして登録する時のコマンド。
     * Message.replyToフィールドにクライアントのMessengerをセットする。 
     */
    public static final int MSG_REGISTER_CLIENT = 1;

    /**
     * クライアントの登録解除を行う場合のコマンド。
     * Message.replyToフィールドにクライアントのMessengerをセットする。 
     */
    public static final int MSG_UNREGISTER_CLIENT = 2;

    /**
     * Serviceの保持している値を、登録されているクライアントに送信するコマンド。
     */
    public static final int MSG_SET_VALUE = 3;
}
