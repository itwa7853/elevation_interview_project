import {Entity, model, property} from '@loopback/repository';

@model()
export class users extends Entity {
  @property({
    type: 'number',
    id: true,
    generated: true,
  })
  id?: number;

  @property({
    type: 'string',
    required: true,
  })
  email: string;

  @property({
    type: 'string',
    required: true,
  })
  password: string;

  @property({
    type: 'string',
    required: true,
  })
  phone: string;

  @property({
    type: 'string',
    required: true,
  })
  role: string;


  constructor(data?: Partial<Egroups>) {
    super(data);
  }
}

export interface EgroupsRelations {
  // describe navigational properties here
}

export type EgroupsWithRelations = Egroups & EgroupsRelations;
